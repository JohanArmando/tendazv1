<?php

namespace Tendaz\Http\Controllers\checkout;

use Tendaz\Api\Mercadopago;
use Illuminate\Http\Request;
use Tendaz\Models\Order\Order;
use Tendaz\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function successMercadopago(Request $request)
    {
        //en order guardar mco
        $order = Order::where('uuid' , $request->external_reference)->first();
        if (!$order)
            return redirect(url('/'));
        if($order->cart->status == 'open'){
            foreach ($order->cart->products as $product){
                $order->products()->attach($product->id , ['quantity' => $product->pivot->quantity]);
                if($product->stock > 0){
                    $product->stock = $product->stock - $product->pivot->quantity;
                    $product->save();
                }
            }

            $order->cart->update([
                'status' => 'closed'
            ]);
        }

        $mp = new Mercadopago($request->shop->mercadoPago->first()->pivot->api_id, $request->shop->mercadoPago->first()->pivot->api_key);
        // Sets the filters you want
        $filters = array(
            "site_id" => "MCO", // Argentina: MLA; Brasil: MLB,
            "status" => "approved",
            "external_reference" => $request->external_reference
        );
        $searchResult = $mp->search_payment($filters);
        //$status = $searchResult["response"]["results"][count($searchResult["response"]["results"]) - 1 ]["collection"]["status"];
        $status = 'approved';
        if($status == $request->collection_status){
            $order->order_status = 3;
            $order->payment_type = $request->payment_type;
            $order->save();
        }
        return redirect(url('/checkout?status=success'));
    }

    public function pendingMercadopago(Request $request)
    {
        //en order guardar mco
        $order = Order::where('uuid' , $request->external_reference)->first();

        if($order->cart->status == 'open'){
            foreach ($order->cart->products as $product){
                $order->products()->attach($product->id , ['quantity' => $product->pivot->quantity]);
                if($product->stock > 0){
                    $product->stock = $product->stock - $product->pivot->quantity;
                    $product->save();
                }
            }

            $order->cart->update([
                'status' => 'closed'
            ]);
        }

        $mp = new Mercadopago($request->shop->mercadoPago->first()->pivot->api_id, $request->shop->mercadoPago->first()->pivot->api_key);

        // Sets the filters you want
        $filters = array(
            "site_id" => "MCO", // Argentina: MLA; Brasil: MLB,
            "status" => "pending",
            "external_reference" => $request->external_reference
        );
        $searchResult = $mp->search_payment($filters);
        //$status = $searchResult["response"]["results"][count($searchResult["response"]["results"]) - 1 ]["collection"]["status"];
        $status = 'pending';
        if($status == $request->collection_status){
            $order->order_status = 2;
            $order->payment_type = $request->payment_type;
            $order->save();
        }
        return redirect(url('/checkout?status=pending'));
    }
}
