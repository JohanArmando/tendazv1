<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 12/12/16
 * Time: 03:41 AM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Address\Address;

class AddressTransformer extends TransformerAbstract
{
    public function transform(Address $address)
    {
        if ($address->id){
            return [
                '_id'  => $address->uuid,
                'name' => $address->name,
                'city' => 'Bogota',
                'complement' => $address->complement,
                'country'    => [
                    '_id' => $address->country->uuid,
                    'name' => $address->country->name,
                ],
                'isPrimary' => !$address->pivot ? null :$address->pivot->isPrimary,
                'neighborhood' => $address->neighborhood,
                'postalCode'   => $address->postalCode,
                'number'   => $address->number,
                'receiverName'   => $address->receiverName,
                'state'   => [
                    '_id' => $address->state->uuid,
                    'name' => $address->state->name,
                ],
                'street' => $address->street
            ];   
        }else{
            return [];
        }
    }
}