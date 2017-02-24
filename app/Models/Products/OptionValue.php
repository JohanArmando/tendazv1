<?php

namespace Tendaz\Models\Products;

use Tendaz\Traits\UuidAndShopTrait;
use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    use UuidAndShopTrait;
    protected $fillable = [
        'id' , 'name' , 'attribute' , 'position' , 'option_id'
    ];

    public function variants()
    {
        return $this->belongsToMany(Variant::class , 'option_value_variants');
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
