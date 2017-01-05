<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 7/12/16
 * Time: 11:21 AM
 */

namespace Tendaz\Transformers;

use Tendaz\Models\Customer;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{
    public function transform(Customer $customer)
    {
        if ($customer->id){
            return [
                '_id'           => $customer->uuid ,
                'email'         => $customer->email,
                'cart_id'       => $customer->cartsOpen->last()->secure_key,
                'personal_info' => [
                    'first_name'    => $customer->name,
                    'last_name'     => $customer->last_name,
                    'phone'         => $customer->phone,
                    'identification'=> $customer->identification,
                    'avatar'       => $customer->avatar
                ]
            ];
        }
        return [];
    }
}