<?php

namespace Tendaz\Models\Order;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Customer;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Consult extends Model
{
    use WhereShopTrait, UuidAndShopTrait;

    protected $table = 'consults';
    protected $fillable = ['uuid', 'message' ,'phone' , 'allowed', 'customer_id','shop_id'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function setMessageAttribute($value){
        if(empty($value)){
            $this->attributes['message'] = 'Pedido de inscripci&oacute;n a newsletter';
        }else{
            $this->attributes['message'] = $value;
        }
    }

}