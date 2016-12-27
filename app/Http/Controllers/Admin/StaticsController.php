<?php

namespace Tendaz\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Customer;
use Tendaz\Models\Order\Order;
use Tendaz\Models\Products\Product;
use Tendaz\Scopes\OrderStatusScope;
use Tymon\JWTAuth\Claims\Custom;

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
        $totalOrders = Order::all();
        return view('admin.stats.advanced',compact('products'));
    }
}
