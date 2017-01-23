<?php

namespace  Tendaz\Models\Subscription;

use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use UuidAndShopTrait;

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
}
