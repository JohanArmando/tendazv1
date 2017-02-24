<?php

namespace Tendaz\Http\Controllers\Api\Auth\Orders;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Customer;
use Tendaz\Transformers\OrderTransformer;

class OrdersController extends Controller
{
    public function index(Customer $customer)
    {
        $orders = $customer->orders()->orderBy('id' , 'ASC')->NotInitOrders()->get();

        return  fractal()->collection($orders , new OrderTransformer(0));
    }
}
