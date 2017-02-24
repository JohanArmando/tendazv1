<?php

namespace Tendaz\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
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
        $this->validate($request , ['so' => 'required|in:csv,xls']);

        $field = $request->get('range-date');

        $filter = $request->get('filter');

        if (!empty($request->get('range-date'))){
            $orders = Order::$field($request->get('to') , $request->get('from'))->notInitOrders()->get();
        }else {
            $orders = Order::notInitOrders()->get();
        }

        Excel::create("$subdomain.orders_export", function($excel) use($orders) {
            $excel->setTitle('Listado de Ordenes');
            $excel->sheet('Sheetname', function($sheet) use($orders) {;
                $rows = array();
                foreach ($orders as $key => $order) {
                        foreach ($order->products as $k => $product){
                            $rows[] = array(
                                'Numero de orden' => $key + 1,
                                'email' => $order->email,
                                'Fecha' => $k != 0 ? '':$order->created_at,
                                'Estado de la orden' => $k != 0 ? '':$order->status->name,
                                'Estado del pago' => $k != 0 ? '': ($order->order_status >= 3 ? 'Recibido' : 'No Recibido'),
                                'Estado del envio' => $k != 0 ? '':$order->isSend,
                                'Subtotal de productos' => $k != 0 ? '':$order->total_products,
                                'Descuento' => $k != 0 ?'' :$order->total_discount,
                                'Costo del envio' => $k != 0 ? '':$order->total_shipping,
                                'total' => $k != 0 ? '' :$order->total,
                                'Nombre del comprador' => $k != 0 ? '':$order->user->full_name,
                                'Telefono' => $k != 0 ? '':$order->phone,
                                'Direccion' => $k != 0 ? '':$order->shippingAddress->address->street,
                                'Numero' => $k != 0 ?'' :$order->shippingAddress->address->complement,
                                'Barrio' => $k != 0 ? '':$order->shippingAddress->address->neighborhood,
                                'Ciudad' => $k != 0 ? '':$order->shippingAddress->address->city->name,
                                'Provincia o Estado' => $k != 0 ?'' :$order->shippingAddress->address->state->name,
                                'Pais' => $k != 0 ?'' :$order->shippingAddress->address->country->name,
                                'Medio de pago' => $k != 0 ? '':$order->payment->paymentMethod->name,
                                'Cupon de descuento' => $k != 0 ? '': ($order->cart->coupon ? $order->cart->coupon->code : ''),
                                'Notas del vendedor' => $k != 0 ? '' :$order->note,
                                'Nombre del producto' => $product->product->name,
                                'Precio del producto' => $product->original_price,
                                'Cantidad del producto' => $product->pivot->quantity,
                                'Sku' => $product->sku,
                            );
                        }
                }
                $sheet->fromArray($rows);
            });
        })->export($request->get('so'));
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