<?php

namespace Tendaz\Models\Send;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Send extends Model
{
    use WhereShopTrait,UuidAndShopTrait;
    protected $table = "shipping_methods";
    protected $fillable = ['name','cost','min_price','max_price' , 'min_weight','max_weight','country_base_operation_id'];
}
