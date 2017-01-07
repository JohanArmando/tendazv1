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
    private $token;
    
    public function __construct($token = null)
    {
        $this->token = $token;
    }

    public function transform(PaymentValue $paymentValue)
    {
        switch ($paymentValue->paymentMethod->id){
            case 1:
                return [
                    '_id' => $paymentValue->uuid,
                    'token' => $this->token,
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