<?php

namespace Tendaz\Models\Store;

use Illuminate\Database\Eloquent\Model;

class CategoryShop extends Model
{
    protected $table = 'category_shop';


    protected $fillable = [
        'uuid', 'name', 'value'
    ];
}
