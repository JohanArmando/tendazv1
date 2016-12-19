<?php

namespace Tendaz\Http\Controllers\Checkout;

use Illuminate\Http\Request;
use SantiGraviano\LaravelMercadoPago\MP;
use Tendaz\Api\Mercadopago;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Order\Order;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('new-checkout.index');
    }

    public function successMercadopago(Request $request)
    {
        //en order guardar mco
        $order = Order::where('uuid' , $request->external_reference)->first();
        $mp = new Mercadopago($request->shop->mercadoPago->first()->pivot->client_id, $request->shop->mercadoPago->first()->pivot->client_secret);
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
        dd($request->all());
    }
}
