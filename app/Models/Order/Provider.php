<?php

namespace Tendaz\Models\Order;

use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    use UuidAndShopTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name', 'last_name', 'phone', 'email', 'department_id', 'country_id'
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

}