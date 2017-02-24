<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 13/12/16
 * Time: 05:53 PM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Shipping\ShippingMethod;

class ShippingMethodTransformer extends TransformerAbstract
{
    public function transform(ShippingMethod $method)
    {
        if (!$method->id){
            return [];
        }else{
            return [
                '_id'   => $method->uuid,
                'cost'  => $method->cost,
                'name'  => $method->name,
                'min_price'  => $method->min_price,
                'max_price'  => $method->max_price,
                'min_weight'  => $method->min_weight,
                'max_weight'  => $method->max_weight,
                'price'       => $method->PriceRang,
                'weight'       => $method->weightRang,
            ];
        }
    }
}