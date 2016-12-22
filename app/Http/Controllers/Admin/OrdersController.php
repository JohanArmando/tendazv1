<?php

namespace Tendaz\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use League\Fractal\Serializer\ArraySerializer;
use Maatwebsite\Excel\Facades\Excel;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Order\Order;
use Tendaz\Models\Order\OrderStatus;
use Tendaz\Transformers\OrderTransformer;

class OrdersController extends Controller
{
    public function index($subdomain , Request $request)
    {
        $orders = Order::where('order_status' , '<>' , 1)->orderBy('id' , 'DESC')->get();
        return view('admin.orders.index',compact('orders'));
    }

    public function status()
    {
        return [OrderStatus::where('id' , '<>' , 1)->get(['name' ,'id'])];
    }

    public function show($subdomain , $id){
        $orders= Order::findOrFail($id);
        $histories= $orders->histories->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y-m-d');
        })->toArray();
        return view('admin.orders.order-detail',compact('orders' , 'histories'));
    }
    
    public function update($subdomain ,$id , Request $request)
    {
        $order= Order::findOrFail($id);
        $order->order_status = 11;
        $order->save();
        return redirect()->to('admin/orders');
    }

    public function getExport()
    {
        return view('admin.orders.export-orders');
    }

    public function filterDate($date , $from ,$to){
        $all = '';
        if($date == 'last'){
            $all = $this->orders->whereBetween('orders.created_at',[Carbon::yesterday(),Carbon::now()]);
        }elseif($date == 'eight'){
            $all = $this->orders->whereBetween('orders.created_at',[Carbon::today()->subDays(8),Carbon::now()]);
        }elseif($date == 'month'){
            $all = $this->orders->whereBetween('orders.created_at',[Carbon::today()->subMonth(1),Carbon::now()]);
        }elseif($date == 'custom'){
            if(!empty($from) && !empty($to) && isset($from) &&  isset($to)){
                $all = $this->orders->whereBetween('orders.created_at',[Carbon::parse($from),Carbon::parse($to)]);
            }
        }
        return   $all;
    }

    public function postExport(Request $request){

        //status
        $state = $request->get('state');
        //type download
        $request->get('so') == 'Mac' ? $so = 'csv' : $so = 'xls';
        //type de filter
        $date = $request->get('date');
        //input filter
        $filter = $request->get('filter');
        //custom from and to
        $request->has('from') ? $from = $request->get('from') : '' ;
        $request->has('to') ? $to = $request->get('to') : $from = '';

        //all orders
            $filters = Order::join('customers','customers.id','=','orders.customer_id')
                ->join('order_item','order_item.order_id','=','orders.id')
                ->join('order_status','order_status.id','=','orders.order_status')
                ->join('variants','variants.id','=','order_item.variant_id')
                ->select('customers.*' , 'orders.*' , 'order_item.*','order_status.*',
                    'customers.name as name_customer','order_status.name as name_status')->get();
            return $this->generateExcel($filters , $so);
    }


    public function generateExcel($data ,$so){
        Excel::create('orders', function($excel) use($data ) {
            $excel->setTitle('Listado  ordenes : ');
            $excel->sheet('Sheetname', function($sheet) use($data) {
                $rows = array();
                //dd($data);
                foreach ($data as $key => $model) {
                    $rows[] = array(
                        'Numero de orden' => ($key + 1)+100,
                        'fecha' => ($model->created_at),
                        'Estado de la orden' => $model->name_status,
                        'Subtotal' => number_format($model->total,2,',','.'),
                        'Envio' => number_format($model->shipping,2,',','.'),
                        'Total' => number_format($model->total,2,',','.'),
                        'Nombre del comprador' => $model->name_customer,
                        'Telefono' => $model->phone,
                        'Medio de pago' => $model->shipping_method_id,
                        'Notas del vendedor' => $model->notes,
                    );

                }$sheet->fromArray($rows);
            });
        })->store($so);
        return redirect()->to('/exports/ordenes.'.$so);

    }
}