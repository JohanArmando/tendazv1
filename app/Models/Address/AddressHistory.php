<?php

namespace Tendaz\Models\Addres;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Address\Address;

class AddressHistory extends Model
{
    public function address(){
        return $this->belongsTo(Address::class);
    }
}
