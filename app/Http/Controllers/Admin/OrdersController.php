<?php

namespace Tendaz\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use League\Fractal\Serializer\ArraySerializer;
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
}