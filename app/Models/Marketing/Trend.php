<?php

namespace Tendaz\Models\Marketing;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Trend extends Model
{
    use UuidAndShopTrait;

    protected $table = 'trends';
    protected $fillable  = ['uuid' , 'hits', 'customer_id','trend_id','trend_type'];

}