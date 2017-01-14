<?php

namespace Tendaz\Http\Controllers\Tendaz\Checkout;

use Illuminate\Http\Request;
use Tendaz\Api\Mercadopago;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Order\Order;

class NotificationController extends Controller
{
    public function notification(Request $request)
    {
        $order = Order::withDrafts()->where('api_id' , $request->get('id'))->first();
        if ($order){
            $mp = new Mercadopago($order->shop->mercadopago->first()->pivot->api_id, $order->shop->mercadopago->first()->pivot->api_key);
            if (!isset($_GET["id"]) || !ctype_digit($_GET["id"])) {
                http_response_code(400);
                return;
            }

            $payment_info = $mp->get_payment_info($_GET["id"]);
            if ($payment_info["status"] == 200) {
                $order->updateStatus($payment_info["response"]["collection"]["status"]);
                http_response_code(200);
            }
        }
    }
}
