<?php

namespace Tendaz\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Option extends Model
{
    use UuidAndShopTrait , WhereShopTrait;
    
    protected $fillable = [
        'uuid' , 'name' , 'position'
    ];

    public function values()
    {
        return $this->hasMany(OptionValue::class);
    }
}
