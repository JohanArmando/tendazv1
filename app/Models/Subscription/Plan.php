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
    
    public function plan()
    {
        return $this->belongsTo(Plan::class);
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

    public function getPrice()
    {
        if ($this->interval == 'monthly'){
            return number_format(( $this->plan->price  - ($this->plan->price * $this->discount) / 100 ), 2);
        }else if ($this->interval == 'yearly'){
            return number_format(( $this->plan->price  - ($this->plan->price * $this->discount) / 100 ), 2);
        }
    }
}
