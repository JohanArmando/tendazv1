<?php

namespace Tendaz\Models\Address;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class CustomerAddress extends Model
{
    
    protected $table = 'customer_address';
    
    protected $fillable = ['uuid' , 'customer_id' , 'address_id' , 'isActive' , 'isShipping' , 'isBilling' , 'isPrimary' , 'created_at' , 'updated_at'];

    public function __construct(array $attributes = null){
        if(count($attributes) > 0){
            $this->attributes['uuid'] = Uuid::generate(4)->string;
            parent::__construct($attributes);
        }
    }

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function customer(){
        return $this->belongsTo(User::class , 'customer_id');
    }

    public function ordersShippingAddress(){
        return $this->hasMany(Order::class , 'shipping_address_id');
    }
    public function ordersBillingAddress(){
        return $this->hasMany(Order::class , 'billing_address_id');
    }
}
