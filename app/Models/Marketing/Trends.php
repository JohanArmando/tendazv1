<?php

namespace Tendaz\Models\Marketing;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Trends extends Model
{
	use UuidAndShopTrait, WhereShopTrait;

    protected $table = 'trends_preferences';
    protected $fillable  = ['uuid' , 'email_frequency' , 'products_black', 'shop_id','categories_black','coupon_id'];

    public function shop(){
        return $this->hasOne(Shop::class);
    }
}
