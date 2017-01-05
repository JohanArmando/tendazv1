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
        $orders = Order::orderBy('id' , 'DESC')->NotInitOrders()->get();
        $status = OrderStatus::all();
        return view('admin.orders.index',compact('orders','status'));
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

    public function postExport($subdomain , Request $request)
    {
        $request->get('so') == 'Mac' ? $so = 'csv' : $so = 'xls'; //type download
        $rangeDate = $request->get('range-date'); //type de filter
        $filter = $request->get('filter'); //input filter
        $from = $request->get('from'); //custom from
        $to = $request->get('to'); //custom to

        //all orders
        if($rangeDate == 'all' && $filter == '') {
            $filters = Order::where('orders.shop_id' , $request->shop->id)
                ->join('customers', 'customers.id', '=', 'orders.customer_id')
                ->select('customers.*', 'orders.*', 'customers.name as name_customer')->get();
        }
        //input orders
        if($rangeDate == 'all' && !$filter == ''){
            $filters = Order::where('orders.shop_id' , $request->shop->id)
                ->join('customers', 'customers.id', '=', 'orders.customer_id')
                ->orWhere('orders.id','=',$filter)
                ->orWhere('customers.name','like','%'.$filter.'%')
                ->orWhere('customers.email','like','%'.$filter.'%')
                ->orWhere('orders.total','=', $filter)->get();
        }
        //date last
        if($rangeDate == 'last' && $filter == ''){
            $filters = Order::where('shop_id' , $request->shop->id)
                ->whereBetween('created_at',[Carbon::yesterday(),Carbon::now()])->get();
        }
        //date last
        if($rangeDate == 'eight' && $filter == ''){
            $filters = Order::where('shop_id' , $request->shop->id)
                ->whereBetween('created_at',[Carbon::today()->subDays(8),Carbon::now()])->get();
        }
        //date last
        if($rangeDate == 'month' && $filter == ''){
            $filters = Order::where('shop_id' , $request->shop->id)
                ->whereBetween('created_at',[Carbon::today()->subMonth(1),Carbon::now()])->get();
        }
        //date custom
        if($rangeDate == 'custom' && $filter == ''){
            $filters = Order::where('shop_id' , $request->shop->id)
                ->whereBetween('created_at',[Carbon::parse($to),Carbon::parse($from)])->get();
        }

        return $this->generateExcel($filters , $so);
    }


    public function generateExcel($data ,$so){
        \Excel::create('ordenes', function($excel) use($data ) {
            $excel->setTitle('Listado  ordenes : ');
            $excel->sheet('ordenes', function($sheet) use($data) {
                $rows = array();
                //dd($data);
                foreach ($data as $model) {
                        $rows[] =  array(
                            'Numero de orden'       => ($model->id),
                            'fecha'                 => ($model->created_at),
                            'Estado de la orden'    => $model->order_status,
                            'Subtotal'              => number_format($model->total,2,',','.'),
                            'Envio'                 => number_format($model->shipping,2,',','.'),
                            'Total'                 => number_format($model->total,2,',','.'),
                            'Nombre del comprador'  => $model->name_customer,
                            'Telefono'              => $model->phone,
                            'Medio de pago'         => $model->shipping_method_id,
                            'Notas del vendedor'    => $model->notes,
                        );
                }$sheet->fromArray($rows);
            });
        })->store($so);
        return redirect()->to('/exports/ordenes.'.$so);

    }

    public function updateNote(Request $request , $id){
        dd($request->all());
        $order = Order::where('id',$id)->first();
        $order->note = $request->get('note');
        $order->save();
        return response()->json($order->note);
    }
}