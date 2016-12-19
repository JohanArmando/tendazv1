<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 12/12/16
 * Time: 02:20 PM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Payment_method\PaymentMethod;

class PaymentMethodsTransformers extends TransformerAbstract
{

    public function transform(PaymentMethod $paymentMethod)
    {
        return [
            '_id'               => $paymentMethod->uuid,
            'name'              => $paymentMethod->name,
            'path'              => $paymentMethod->path,
            'cost_by_trans_deb' => $paymentMethod->cost_by_trans_deb,
            'cost_by_trans_cre' => $paymentMethod->cost_by_trans_cre,
            'days'              => $paymentMethod->days
        ];
    }

}