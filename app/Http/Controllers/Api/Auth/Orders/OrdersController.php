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
        $orders = $customer->orders()->NotInitOrders()->get();
        //enviar order _id fecha estado pago envio total total de productos
        //en el detalle de la orden resumen de productos
        //resumen de cupon
        //resumen de envio y costo id medio de apgo pago estado fecha
        return  [$orders];
    }
}
