<?php

namespace Tendaz\Http\Controllers\checkout\payments;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use MP;
use Tendaz\Http\Requests;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Order;
use Tendaz\url\DomainStore;
use Illuminate\Support\Facades\Config;

class MercadoPagoController extends Controller
{
    public function __construct()
    {
        $resolve = new DomainStore();
        $this->store = $resolve->getStore();
        Config::set('mercadopago.app_id' , $this->store->payment_mercadopago->first()->pivot->client_id);
        Config::set('mercadopago.app_secret' , $this->store->payment_mercadopago->first()->pivot->client_secret);
    }

    public function paymentSuccess(Request $request){
        $order = Order::where('uuid' , $request->external_reference)->first();
        $order->payment_type = $request->payment_type;
        $order->order_status_id = 1;
        $order->save();
        //mi pregunte surje como no permitir crear mas ordenes al dar click en pagar
        //a aprte tiene la opcion de realizar pago si el pago no fe acreditado
        $email = Session::get($this->store->id.'address-checkout')['cart']['contact']['email'];
        $status = $request->collection_status;
        return view('checkout.finished' , compact('email' , 'status'));
   }
    public function paymentPending(Request $request){
        $order = Order::where('uuid' , $request->external_reference)->first();
        $order->payment_type = $request->payment_type;
        $order->order_status_id = 11;
        $order->save();
        $email = Session::get($this->store->id.'address-checkout')['cart']['contact']['email'];
        $status = $request->collection_status;
        return view('checkout.finished' , compact('email' , 'status'));
    }

    public function paymentFailure(Request $request){
        $order = Order::where('uuid' , $request->external_reference)->first();
        $order->payment_type = $request->payment_type;
        $order->order_status_id = 11;
        $order->save();
        $email = Session::get($this->store->id.'address-checkout')['cart']['contact']['email'];
        $status = $request->collection_status;
        return view('checkout.finished' , compact('email' , 'status'));
    }


    public function notifcation(){
        if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
            http_response_code(400);
            return;
        }
        // Get the payment and the corresponding merchant_order reported by the IPN.
        if($_GET["topic"] == 'payment'){
            $payment_info = MP::get("/collections/notifications/" . $_GET["id"]);
            $merchant_order_info =MP::get("/merchant_orders/" . $payment_info["response"]["collection"]["merchant_order_id"]);
            // Get the merchant_order reported by the IPN.
        } else if($_GET["topic"] == 'merchant_order'){
            $merchant_order_info = MP::get("/merchant_orders/" . $_GET["id"]);
        }
        if ($merchant_order_info["status"] == 200) {
            // If the payment's transaction amount is equal (or bigger) than the merchant_order's amount you can release your items
            $paid_amount = 0;
            foreach ($merchant_order_info["response"]["payments"] as  $payment) {
                if ($payment['status'] == 'approved'){
                    $paid_amount += $payment['transaction_amount'];
                }
            }
            $order = Order::where('uuid' , $merchant_order_info['response']['external_reference'])->first();
            if($paid_amount >= $merchant_order_info["response"]["total_amount"]){
                if(count($merchant_order_info["response"]["shipments"]) > 0) { // The merchant_order has shipments
                    if($merchant_order_info["response"]["shipments"][0]["status"] == "ready_to_ship"){
                        $order->order_status_id = 1;
                    }
                } else { // The merchant_order don't has any shipments
                        $order->order_status_id = 1;
                }
            } else {
            }
            $order->save();
        }
    }
}
