<?php

namespace Tendaz\Models\Subscription;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * SCOPES
     */
    
    public static  function whereUuid( $uuid){
        return Plan::where('uuid' , '=' ,  $uuid)->first();
    }
    
    public static function findName($plan)
    {
        return static::where('name', ucfirst($plan))->first();
    }
}
