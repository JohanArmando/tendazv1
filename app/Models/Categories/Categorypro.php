<?php

namespace Tendaz\Models\Categories;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Categorypro extends Model
{


    protected $table 		= 'category_product';
    protected $fillable  	= ['uuid' , 'category_id' , 'product_id'];

    
}
