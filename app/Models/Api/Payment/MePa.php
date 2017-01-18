<?php

namespace Tendaz\Models\Api\Payment;


use Symfony\Component\HttpFoundation\Request;
use Tendaz\Api\Mercadopago;
use Tendaz\Models\Cart\Cart;

class MePa
{
    private $shopping_cart;
    private $client_id;
    private $client_secret;
    private $token_card;

    const PAYMENT_URL = '/v1/payments';

    public function __construct(Cart $cart, $token = null, Request $request)
    {
        $this->request = $request;
        $this->mp = new Mercadopago($token);
        $this->shopping_cart = $cart;
        $this->external_reference = $this->shopping_cart->order->uuid;
    }

    public function generate()
    {
        $this->createTokenCard();

        $payment = $this->mp->post(self::PAYMENT_URL, [
            "payment_method_id" => $this->payer(),
            "notification_url" => $this->notificationUrl(),
            "callback_url" => $this->callbackUrl(),
            //"payment_type_id" => $this->paymentType(),
            "transaction_amount" => $this->amount(),
            //"currency_id" => "COP",
            "installments" => $this->installments(),
            "additional_info" => [
                "items" => $this->items(),
                "shipments" => $this->shipping(),
                "payer" =>  $this->buyer(),
            ],
            "payer" => [
                "email" => $this->shopping_cart->customer->email
            ],
            "external_reference" => $this->shopping_cart->order->uuid,
            "coupon_amount"        => $this->shopping_cart->order->total_discount,
            "token"                => $this->getTokenCard()
        ]);
        
        return $payment;
    }

    public function createTokenCard()
    {

        $card = $this->mp->post('/v1/card_tokens' , [
            "expiration_month" => $this->request->expiration_month,
            "expiration_year"  =>  $this->request->expiration_year,
            "security_code"    =>  $this->request->security_code,
            'cardholder' => [
                'identification' => [
                    'number' =>  $this->request->identification,
                    'type'   => $this->request->identification_type
                ],
                'name' => $this->request->card_name
            ],
            "card_number" => $this->request->card_number
        ]);

        if (isset($card->original['cause']['code']))
            return $card;
        
        $this->token_card = (string) $card['response']['id'];
    }

    public function getTokenCard()
    {
        return $this->token_card;
    }

    public function shipping()
    {
        return [
            'receiver_address' => [
                'street_name' => $this->shopping_cart->order->shippingAddress->address->name,
                'street_number' => $this->shopping_cart->order->shippingAddress->address->street,
                'floor' =>$this->shopping_cart->order->shippingAddress->address->floor,
            ]
        ];
    }

    public function buyer()
    {
        return [
          "first_name" => $this->shopping_cart->customer->name,
          "last_name" => $this->shopping_cart->customer->last_name,
        ];
    }

    public function items()
    {
        $items = [];
        foreach ($this->shopping_cart->products as $product){
            array_push($items , $product->mepaItem());
        }

        return $items;
    }   

    public function installments()
    {
        return $this->request->installments;
    }

    public function amount()
    {
        return $this->shopping_cart->total();
    }

    public function paymentType()
    {
        return $this->request->payment_type;
    }

    public function notificationUrl()
    {
        return env('APP_URL')."mepa/payments/notification";
    }

    public function callbackUrl()
    {
        return env('APP_URL')."mepa/payments";
    }

    public function payer()
    {
        return $this->request->payment_method_id;
    }
}