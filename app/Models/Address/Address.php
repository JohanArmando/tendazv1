<?php

namespace Tendaz\Models\Address;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Geo\Country;
use Tendaz\Models\Customer;
use Tendaz\Models\Geo\City;
use Tendaz\Models\Geo\State;
use Webpatser\Uuid\Uuid;

class Address extends Model
{
    protected $fillable = ['uuid' ,'name' , 'street' , 'complement' , 'neighborhood' , 'state_id' , 'city_id' , 'country_id' , 'receiverName' , 'longitude'];
    
    public function __construct(array $attributes = null){
        if(count($attributes) > 0){
            $this->attributes['uuid'] = Uuid::generate(4)->string;
            parent::__construct($attributes);
        }
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    public function customer(){
        return $this->belongsToMany(Customer::class , 'customer_address'  , 'address_id' , 'customer_id')->withPivot('id');
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
    
    public function city(){
        return $this->belongsTo(City::class);
    }

    public function customerAddress(){
        return $this->hasMany(CustomerAddress::class);
    }

    public function addressHistory(){
        return $this->hasMany(AddressHistory::class);
    }

    /*MUTATORS*/
    //GETTERs

    public function setEmailAttribute($value){
        if(!empty($value)){
            $this->email = $value;
        }else{
            if(auth('web')->check()){
                $this->email =  auth('web')->email;
            }
        }
    }

    public function getFullNameAttribute(){
        return $this->first_name_dest.' '.$this->last_name_dest;
    }
}
