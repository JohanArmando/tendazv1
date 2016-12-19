<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 19/12/16
 * Time: 03:05 PM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Coupon\Coupon;

class CouponTransformer extends TransformerAbstract
{
    public function transform(Coupon $coupon)
    {
        return [
            '_id'  => $coupon->uuid,
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            //añadir restricciones y si es aplicado a productos a cuales productsp
            //en products transformer mostrar el descuento por producto y el coupon qye se le aplico
        ];
    }
}