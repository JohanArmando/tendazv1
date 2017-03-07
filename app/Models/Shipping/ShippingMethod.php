<?php

namespace Tendaz\Models\Shipping;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Events\applyCouponToCartEvent;
use Tendaz\Events\updateShippingOrderEvent;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Order\Order;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;
use Tendaz\Transformers\CartTransformer;

class ShippingMethod extends Model
{
    use WhereShopTrait , UuidAndShopTrait;

    protected $table = 'shipping_methods';

    protected $fillable = ['uuid' , 'name','cost','min_price','max_price','min_weight','max_weight','shop_id' , 'country_id' , 'type'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function scopeOptionsByCart($query ,Cart $cart){
        $total = 0;
        foreach ($cart->products as $product) {
            $price = $product->product->collection->first()->promotion ? $product->promotional_price : $product->price;
            $method =  $this->filterByPrice($price)->filterByWeight($product->weight)->orderBy('id')->min('cost');
            if (!$method){
                event(new updateShippingOrderEvent($cart->order , 0 , true));
                return response()->json(['message' => 'El producto ' . $product->product->name .' no tiene envio disponible.' , 'cart' => fractal()->item($cart, new CartTransformer()) ] , 404);
            }
            //$total += ($method * $product->pivot->quantity);
        }
        //$total = 1000;
        event(new updateShippingOrderEvent($cart->order , $total));
        return response()->json(['message' => "Perfecto ya calculamos tu envio :$ ".number_format($total , 2) , 'cart' => fractal()->item($cart, new CartTransformer()) ] , 201);
    }
    
    public function scopeFilterByPrice($query , $total){
        $query->FilterByPriceMin($total)->FilterByPriceMax($total);
    }

    public function scopeFilterByPriceMin($query , $total){
        $query->where(function($q) use ($total) {
            $q->where('min_price','<=' ,$total)
                ->orWhere('min_price', '-1');
        });
    }
    public function scopeFilterByPriceMax($query , $total){
        $query->where(function($q) use ($total) {
            $q->where('max_price','>=' ,$total)
                ->orWhere('max_price', '-1');
        });
    }
    public function scopeFilterByWeight($query , $weight){
        $query->FilterByWeightMax($weight)->FilterByWeightMin($weight);
    }
    public function scopeFilterByWeightMin($query , $weight){
        $query->where(function($q) use ($weight) {
            $q->where('min_weight','<=' ,$weight)
                ->orWhere('min_weight', '-1');
        });
    }
    public function scopeFilterByWeightMax($query , $weight){
        $query->where(function($q) use ($weight) {
            $q->where('max_weight','>=' ,$weight)
                ->orWhere('max_weight', '-1');
        });
    }

    public function setMaxPriceAttribute($value)
    {
        if (!empty($value)){
            $this->attributes['max_price'] = is_numeric($value) ? $value : -1;
        }else{
            $this->attributes['max_price'] = 0;
        }
    }  
    
    public function setMinPriceAttribute($value)
    {
        if (!empty($value)){
            $this->attributes['min_price'] = is_numeric($value) ? $value : -1;
        }else{
            $this->attributes['min_price'] = 0;
        }
    }  
    
    public function setMaxWeightAttribute($value)
    {
        if (!empty($value)){
            $this->attributes['max_weight'] = is_numeric($value) ? $value : -1;
        }else{
            $this->attributes['max_weight'] = 0;
        }
    }
    
    public function setMinWeightAttribute($value)
    {
        if (!empty($value)){
            $this->attributes['min_weight'] = is_numeric($value) ? $value : -1;
        }else{
            $this->attributes['min_weight'] = 0;
        }
    }

    public function getMinWeightAttribute()
    {
        return $this->attributes['min_weight'] >= 0 ? $this->attributes['min_weight']  : '';
    }

    public function getMaxWeightAttribute()
    {
        return $this->attributes['max_weight'] >= 0 ? $this->attributes['max_weight']  : '';
    }

    public function getMinPriceAttribute()
    {
        return $this->attributes['min_price'] >= 0 ? $this->attributes['min_price']  : '';
    }

    public function getMaxPriceAttribute()
    {
        return $this->attributes['max_price'] >= 0 ? $this->attributes['max_price']  : '';
    }

    public function getCostAttribute()
    {
        return $this->attributes['cost'] > 0 ? (int)$this->attributes['cost']  : 'Gratis';
    }

    public function getPriceRangAttribute()
    {
        if ($this->attributes['max_price'] < 0 && $this->attributes['min_price'] < 0) {
            return "Siempre";
        }elseif ($this->attributes['max_price'] < 0 && $this->attributes['min_price'] >= 0){
            return ("Desde ".number_format($this->attributes['min_price'], 2,',','.'));
        }elseif ($this->attributes['max_price'] >= 0 && $this->attributes['min_price'] < 0){
            return ("Hasta ".number_format($this->attributes['max_price'], 2,',','.'));
        }else{
            return (number_format($this->attributes['min_price'], 2,',','.').' - '.number_format($this->attributes['max_price'], 2,',','.'));
        }
    }

    public function getWeightRangAttribute()
    {
        if ($this->attributes['max_weight'] < 0 && $this->attributes['min_weight'] < 0) {
            return "Siempre";
        }elseif ($this->attributes['max_weight'] < 0 && $this->attributes['min_weight'] >= 0){
            return ("Desde ".number_format($this->attributes['min_weight'], 2,',','.'));
        }elseif ($this->attributes['max_weight'] >= 0 && $this->attributes['min_weight'] < 0){
            return ("Hasta ".number_format($this->attributes['max_weight'], 2,',','.'));
        }else{
            return (number_format($this->attributes['min_weight'], 2,',','.').' - '.number_format($this->attributes['max_weight'], 2,',','.'));
        }
    }



    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
