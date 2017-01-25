<?php

namespace  Tendaz\Models\Subscription;

use Carbon\Carbon;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use UuidAndShopTrait;
    
    const active = 'active';
    const cancel = 'cancelled';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'amount', 'state', 'start_at', 'end_at', 'trial_at','shop_id' ,'plan_id'
    ];
    
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function gracePeriod()
    {
        return property_exists($this , 'grace_period') ? $this->grace_period : 10;
    }
    
    public function makeSubscription()
    {
        $this->shop->subscription_id = $this->id;
        $this->shop->save();
    }

    public function skipTrial()
    {
        $this->trial_at =  null;
        $this->save();
    }

    public function swap(Plan $plan)
    {
        $this->plan_id = $plan->id;
        $this->save();
    }

    public function onTrial()
    {
        return !is_null($this->trial_at) && Carbon::parse($this->trial_at)->isFuture() &&  !$this->cancelled();
    }

    public function cancelled()
    {
        return $this->state == self::cancel && $this->notFinish();
    }

    public function subscribed()
    {
        return $this->isActive() && $this->notFinish();
    }

    public function isGrace($function)
    {
        return Carbon::parse($this->end_at)->$function($this->gracePeriod())->isFuture();
    }

    public function onGracePeriodBefore()
    {
        return $this->notFinish() && !$this->isGrace('subDays');
    }

    public function onGracePeriod()
    {
        return !$this->notFinish() && $this->isGrace('addDays') && !is_null($this->end_at);
    }

    public function isActive()
    {
        return $this->state == self::active;
    }
    
    public function notFinish()
    {
        return !is_null($this->end_at) && Carbon::parse($this->end_at)->isFuture();
    }

    public function subscribedToPlan($plan)
    {
        return $this->plan_id >= Plan::findName($plan)->id;
    }
}
