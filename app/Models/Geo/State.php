<?php

namespace Tendaz\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Order\Provider;

class State extends Model
{
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function provider(){
        return $this->hasOne(Provider::class);
    }
}
