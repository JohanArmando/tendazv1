<?php

namespace Tendaz\Models\Api\Payment;


use Tendaz\Api\Mercadopago;
use Tendaz\Models\Cart\Cart;

class MePa
{
    private $shopping_cart;
    private $client_id;
    private $client_secret;

    const PAYMENT_URL = '/v1/payments';

    public function __construct(Cart $cart, $client_id = null, $client_secret = null, $token = null)
    {
        $this->mp = new Mercadopago($token);
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->shopping_cart = $cart;
        $this->external_reference = $this->shopping_cart->order->uuid;
    }

    public function generate()
    {
        $this->mp->post(self::PAYMENT_URL , [
            "payer"     => $this->payer(),
            "metadata"  => $this->meta(),
            "order"     => $this->order(),
            "external_reference" => $this->external_reference,
            "description",
            "transaction_amount",
            "coupon_amount",
            "transaction_details",
            "payment_type_id",
            "token",
            "payment_method_id",
            "fee_details",
            "installments",
            "notification_url",
            "callback_url",
            "additional_info"
        ]);
    }

    public function payer()
    {
        return [];
    }

    public function meta()
    {
        return [];
    }

    public function order()
    {
        return [];
    }
}