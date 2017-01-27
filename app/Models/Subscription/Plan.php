<?php

namespace Tendaz\Models\Subscription;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    const MONTHLY = 'monthly';
    
    public function periods()
    {
        return $this->hasMany(Plan::class);
    }
    
    public function monthly()
    {
        return $this->periods()->where('interval' , self::MONTHLY)->where('interval_count' , 1);
    }
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
