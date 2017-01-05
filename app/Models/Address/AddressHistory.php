<?php

namespace Tendaz\Models\Address;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Address\Address;

class AddressHistory extends Model
{
    protected $fillable = ['uuid' ,'name' , 'street' , 'complement' , 'neighborhood' , 'state_id' , 'city_id' , 'country_id' , 'receiverName' , 'longitude'];

    protected $table = 'address_history';

    public function address(){
        return $this->belongsTo(Address::class);
    }
}
