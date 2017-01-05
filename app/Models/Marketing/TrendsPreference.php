<?php

namespace Tendaz\Models\Marketing;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class TrendsPreference extends Model
{
	use UuidAndShopTrait, WhereShopTrait;

    protected $table = 'trends_preferences';
    protected $fillable  = ['uuid' , 'email_frequency' , 'products_black', 'categories_black', 'coupon_id','shop_id'];

    public function shop(){
        return $this->hasOne(Shop::class);
    }
}
