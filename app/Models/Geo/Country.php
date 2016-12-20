<?php

namespace Tendaz\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Order\Provider;

class Country extends Model
{
    public function provider(){
        return $this->hasOne(Provider::class);
    }
}
