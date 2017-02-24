<?php

namespace Tendaz\Models\Order;

use Tendaz\Models\Geo\City;
use Tendaz\Models\Geo\Country;
use Tendaz\Models\Geo\State;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\WhereShopTrait;

class Provider extends Model
{

    use WhereShopTrait ,UuidAndShopTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name', 'last_name', 'phone', 'email', 'state_id', 'country_id', 'city_id' , 'shop_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //RELATHIONSHIP
    
    public function shop(){
        return $this->hasOne(Shop::class);
    }

    public function state(){
        return $this->hasOne(State::class);
    }

    public function city(){
        return $this->hasOne(City::class);
    }

    public function country(){
        return $this->hasOne(Country::class);
    }

    /**
     * GETTERS AND SETTERS
     */

    //SETTERS

    public function setNameAttribute($value)
    {
        if(empty($value)){
            $this->attributes['name'] = '';
        }else{
            $this->attributes['name'] = $value;
        }
    }
    public function setLastNameAttribute($value)
    {
        if(empty($value)){
            $this->attributes['last_name'] = '';
        }else{
            $this->attributes['last_name'] = $value;
        }
    }


    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->last_name;
    }


    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function product(){
        return $this->hasOne(Product::class);
    }
}