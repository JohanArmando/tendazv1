<?php

namespace Tendaz\Models\Store;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Models\Geo\City;

class Store extends Model
{
    use UuidAndShopTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name','phone_type', 'number_phone', 'code_country', 'conditions', 'number_local', 'address_1' , 'address_2'  , 'lat' , 'lon' ,'blog' , 'pinterest' , 'instagram' , 'google_plus' , 'twitter' , 'facebook' , 'enabled' , 'shop_id' , 'category_shop_id','build', 'message'
    ];
    
    /**
     * Static function models
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     *
     *
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'code_country');
    }
}
