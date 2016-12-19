<?php

namespace Tendaz\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;
use Webpatser\Uuid\Uuid;

class Section extends Model
{
    use UuidAndShopTrait;
    protected $fillable = [
        'uuid' , 'primary' , 'promotion' , 'product_id','shipping_free'
    ];

    public function getFeatureAttribute()
    {
        return $this->primary ? true : false;
    }
}
