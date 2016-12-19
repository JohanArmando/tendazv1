<?php

namespace Tendaz\Models\Geo;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\City;

class State extends Model
{
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
