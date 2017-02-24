<?php

namespace Tendaz\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Order\Provider;

class City extends Model
{
    protected $table = 'cities';

    public function provider(){
        return $this->hasOne(Provider::class);
    }
}
