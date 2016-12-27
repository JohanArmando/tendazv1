<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 23/12/16
 * Time: 11:01 AM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Store\Shop;

class ShopTransformer extends  TransformerAbstract
{
    public function transform(Shop $shop)
    {
        return [
            '_id' => $shop->uuid,
            'name' => $shop->name,
            'logo' => $shop->logo ? $shop->domainMain->first()->ssl.'/logos/'.$shop->id.'/'.$shop->logo : '',
            'instagram' => $shop->store->instagram,
            'twitter'   => $shop->store->twitter,
            'phone'   => $shop->store->number_phone,
            'correo'   => $shop->store->address_1,
            'facebook'   => $shop->store->facebook,
            'address_2'   => $shop->store->address_2,
        ];
    }
}