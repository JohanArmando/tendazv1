<?php

namespace Tendaz\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;

class OptionValueVariant extends Model
{
    use UuidAndShopTrait ;
    
    protected $table = 'option_value_variant';
    protected $appends = ['option'];

    protected function value()
    {
        return $this->belongsTo(OptionValue::class , 'option_value_id' , 'id');
    }

    protected function getOptionAttribute()
    {
        return $this->value->option;
    }
}
