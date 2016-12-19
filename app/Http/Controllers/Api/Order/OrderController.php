<?php

namespace Tendaz\Http\Controllers\Api\Order;

use Illuminate\Http\Request;
use League\Fractal\Serializer\ArraySerializer;
use Tendaz\Events\updateShippingInOrder;
use Tendaz\Events\updateShippingOrderEvent;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Address\Address;
use Tendaz\Models\Address\CustomerAddress;
use Tendaz\Models\Order\Order;
use Tendaz\Models\Shipping\ShippingMethod;
use Tendaz\Transformers\CartTransformer;
use Tendaz\Transformers\OrderTransformer;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('order_status' , '<>' , 1)->orderBy('id' , 'DESC')->get();
        return  fractal()
            ->collection($orders, new OrderTransformer())
            ->serializeWith(new ArraySerializer())
            ->withResourceName('products')
            ->toJson();
    }
    
    public function update(Order $order , Request $request)
    {
        if ($request->has('shipping_method_id')){
            $shipping_method= ShippingMethod::where('uuid' , $request->get('shipping_method_id'))->first();
            $order->update([
                'shipping_method_id' => $shipping_method->id
            ]);
            event(new updateShippingOrderEvent($order , $shipping_method));
            return response()->json( fractal()->item($order->cart, new CartTransformer()), 201);
        }

        if ($request->has('shipping_address_id')){
            $address= Address::where('uuid' , $request->get('shipping_address_id'))->first();
            $order->update([
                'shipping_address_id' => $address->customer->first()->pivot->id
            ]);
        }else{
            $order->update($request->all());
        }
        return response()->json( fractal()->item($order->cart, new CartTransformer()), 201);

    }
}
