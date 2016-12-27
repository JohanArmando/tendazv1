<?php

namespace Tendaz\Http\Controllers\Admin;

use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Order\Order;
use Tendaz\Models\Products\Product;

class StaticsController extends Controller
{
    public function basic()
    {
        $sold = Order::totalSold();
        $ordersTotal = Order::totalOrders();
        $average =  (int) $sold / ($ordersTotal ? $ordersTotal : 1);
        $higherSell = Product::totalSell()->toArray();
        $higherBilling = Product::totalBilling()->toArray();
        return view('admin.stats.basic' , [
            'sold'          => $sold ,
            'ordersTotal'   => $ordersTotal,
            'average'       => $average,
            'higherBilling' => $higherBilling,
            'higherSell' => $higherSell
        ]);
    }

    public function advanced(){
        $products = Product::all();
        $totalOrders = Order::all()->count();
        $money = Order::all()->sum('total');
        $avg = $money/$totalOrders;
        return view('admin.stats.advanced',compact('products','totalOrders','money','avg'));
    }
}
