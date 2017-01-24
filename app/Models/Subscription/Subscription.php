<?php

namespace  Tendaz\Models\Subscription;

use Carbon\Carbon;
use Illuminate\Support\Facades\Lang;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use UuidAndShopTrait;
    
    const active = 'active';
    
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
    
    public function makeSubscription()
    {
        $this->shop->subscription_id = $this->id;
        $this->shop->save();
    }
    
    public function isTrial()
    {
        return !is_null($this->trial_at) && Carbon::parse($this->trial_at)->isFuture();
    }

    public function isActive()
    {
        return $this->active == self::active;
    }

    public function notFinish()
    {
        return !is_null($this->end_at) && Carbon::parse($this->end_at)->isFuture();
    }
}
