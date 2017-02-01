<?php

namespace Tendaz\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Address\Address;
use Tendaz\Models\Address\CustomerAddress;
use Tendaz\Models\Customer;
use Tendaz\Models\Order\Order;
use Tendaz\Models\Order\OrderStatus;

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

    public function show($subdomain , Order $order , Request $request)
    {
        return view('admin.orders.show',compact('order'));
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
                ->select('customers.*', 'orders.*', 'customers.name as name_customer')->NotInitOrders()->get();
        }
        //input orders
        if($rangeDate == 'all' && !$filter == ''){
            $filters = Order::where('orders.shop_id' , $request->shop->id)
                ->join('customers', 'customers.id', '=', 'orders.customer_id')
                ->orWhere('orders.id','=',$filter)
                ->orWhere('customers.name','like','%'.$filter.'%')
                ->orWhere('customers.email','like','%'.$filter.'%')
                ->orWhere('orders.total','=', $filter)->NotInitOrders()->get();
        }
        //date last
        if($rangeDate == 'last' && $filter == ''){
            $filters = Order::where('shop_id' , $request->shop->id)
                ->whereBetween('created_at',[Carbon::yesterday(),Carbon::now()])->NotInitOrders()->get();
        }
        //date last
        if($rangeDate == 'eight' && $filter == ''){
            $filters = Order::where('shop_id' , $request->shop->id)
                ->whereBetween('created_at',[Carbon::today()->subDays(8),Carbon::now()])->NotInitOrders()->get();
        }
        //date last
        if($rangeDate == 'month' && $filter == ''){
            $filters = Order::where('shop_id' , $request->shop->id)
                ->whereBetween('created_at',[Carbon::today()->subMonth(1),Carbon::now()])->NotInitOrders()->get();
        }
        //date custom
        if($rangeDate == 'custom' && $filter == ''){
            $filters = Order::where('shop_id' , $request->shop->id)
                ->whereBetween('created_at',[Carbon::parse($to),Carbon::parse($from)])->NotInitOrders()->get();
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

    public function updateNote($subdomain , $id ,Request $request){
        $order = Order::where('uuid',$id)->first();
        $order->note = $request->get('note');
        $order->save();
        return redirect()->back()->with('message', array('type' => 'success' , 'message' => 'Nota editada correctamente'));
    }

    public function printOrder($subdomain , $id){
        $order= Order::where('id',$id)->first();
        $customer = Customer::where('id',$order->customer_id)->first();
        return view('admin.orders.printOrder',compact('order','customer'));
    }
}