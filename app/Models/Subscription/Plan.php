<?php

namespace Tendaz\Models\Subscription;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    const MONTHLY = 'monthly';
    
    public function features()
    {
        return $this->belongsToMany(Feature::class , 'features_plan');
    }

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
    
    public function getDiscount($price)
    {
        return round(( $price * ( $this->discount / 100 ) ), 2);
    }
    
    public function getPrice()
    {
        return number_format($this->plan->price, 2);
    }

    public function getTotalPrice()
    {
        if ($this->interval == 'monthly'){
            return $this->getPrice() * $this->interval_count;
        }else if ($this->interval == 'yearly'){
            return $this->getPrice() * ($this->interval_count * 12);
        }
    }

    public function getTotalPriceWithDiscount()
    {
        return $this->getTotalPrice()  - $this->getDiscount($this->getTotalPrice());
    }

    public function getIntervalInMonthly()
    {
        if ($this->interval == 'monthly'){
            return $this->interval_count;
        }else if ($this->interval == 'yearly'){
            return ($this->interval_count * 12);
        }
    }
    
}
