<?php

namespace  Tendaz\Models\Subscription;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;
use Webpatser\Uuid\Uuid;

class Subscription extends Model
{
    use UuidAndShopTrait, WhereShopTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'amount', 'state', 'start_at', 'end_at', 'trial_at','shop_id'
    ];

    public function originalSubscription(){
        return $this->hasMany(Shop::class);
    }

}
