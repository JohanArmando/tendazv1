<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 14/12/16
 * Time: 12:26 AM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Payment_method\PaymentValue;

class PaymentValueTransformer extends TransformerAbstract
{
    public function transform(PaymentValue $paymentValue)
    {
        switch ($paymentValue->paymentMethod->id){
            case 1:
                return [
                    '_id' => $paymentValue->uuid,
                    'client_secret' => $paymentValue->client_secret,
                    'client_id' => $paymentValue->client_id,
                    'merchant_id' => $paymentValue->merchant_id,
                    'type'         => 'mercadopago',
                    'name'          => $paymentValue->paymentMethod->name
                ];
            break;
            case 4:
                return [
                    'discount' => $paymentValue->discount,
                    'instructions' => $paymentValue->instructions,
                    'custom_name' => $paymentValue->custom_name,
                ];
                break;
        }
    }
}