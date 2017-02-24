<?php

namespace Tendaz\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;
use Webpatser\Uuid\Uuid;

class Sellable extends Model
{
    use UuidAndShopTrait;
    protected $fillable = [
        'sku' , 'uuid' , 'price' , 'promotional_price' , 'weight' , 'stock' , 'show' , 'price_declared'
    ];

    /**
     * SETTERS
     */


    public function setPriceAttribute($value){

        if(!empty($value)){
            $this->attributes['price'] = $value < 0 || !is_numeric($value) ? 0 : $value;
        }else{
            $this->attributes['price'] = 0;
        }
    }

    public function setPriceDeclaredAttribute($value)
    {
        if(!empty($value)){
            $this->attributes['price_declared'] = (int) $value;
        }else{
            $this->attributes['price_declared'] = $this->attributes['price'] ? $this->attributes['price'] : 0;
        }
    }

    public function setPromotionalPriceAttribute(){
        if(!empty($value)){
            $this->attributes['promotional_price'] = $value < 0 || !is_numeric($value) ? 0 : $value;
        }else{
            $this->attributes['promotional_price'] = 0;
        }
    }

    public function setStockAttribute($value){
        if(!empty($value)){
            $this->attributes['stock'] = $value < 0 || !is_numeric($value) ? 0 : $value;
        }else{
            $this->attributes['stock'] = -1;
        }
    }

    public function setWeightAttribute($value){
        if(!empty($value)){
            $this->attributes['weight'] = $value < 0 || !is_numeric($value) ? 0 : $value;
        }else{
            $this->attributes['weight'] = 0;
        }
    }

    public function getStockAttribute()
    {
        return $this->attributes['stock'] < 0 ? 'unlimited' : $this->attributes['stock'];
    }

    public function getPriceAttribute()
    {
        return (int) $this->attributes['price'];
    }

    public function getPromotionalPriceAttribute()
    {
        return (int) $this->attributes['promotional_price'];
    }
    
}
