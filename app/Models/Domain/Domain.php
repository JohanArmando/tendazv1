<?php

namespace Tendaz\Models\Domain;

use Illuminate\Support\Facades\Cache;
use Tendaz\Models\Store\Shop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Domain extends Model
{
    use  UuidAndShopTrait,WhereShopTrait;
    
    public static $SHOP_ID;
    
    protected   $fillable = [
        'uuid' ,  'name','domain'  , 'ssl' , 'main' , 'active' , 'state' , 'domain_id' , 'shop_id'
    ];

    protected $subdomain;
    protected $store;

    public function __construct(array $attributes = null)
    {
        if (count($attributes) > 0){
            parent::__construct($attributes);
        }
        $this->subdomain  = self::getSubdomain();
        $this->store  = Cache::get($this->subdomain.'_store');
    }

    public function getDomain(){
        return env('DOMAIN_TENDAZ' , 'tendaz.app');
    }

    public function getDomainSubTendaz(){
        return env('DOMAIN_TENDAZ_SUBDOMAIN' , 'tendaz.app:8000');
    }  
    
    public function getTendazWww(){
        return env('DOMAIN_TENDAZ_WWW' , 'www.tendaz.app');
    }
    
    /**
     * RELATIONSHIPS
     */

    public function children()
    {
        return $this->hasMany(Domain::class , 'domain_id');
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);    
    }

    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    /**
     * SETTERS
     */

    public function setNameAttribute($value){
        if(!empty($value)){
            $val = $value.'.'.self::getDomain();
            $this->attributes['name'] = $val;
        }
    }
   public function setDomainAttribute($value){
        if(!empty($value)){
            $val = 'http://'.$value.'.'.self::getDomainSubTendaz();
            $this->attributes['domain'] = $val;
        }
    }

    public function setSslAttribute($value){
        if(!empty($value)){
            $val = 'https://'.$value.'.'.self::getDomainSubTendaz();
            $this->attributes['ssl'] = $val;
        }
    }

    /**
     * METHODS FOR GET STORE
     */
    public function scopeDomainByUser(){
        return auth('admins')->user()->shop->domains->first()->domain;
    }

    public function scopeShopByDomain(){
        if (!Cookie::has('store')){
            $request = new Request();
            $url = explode('.' , $request->capture()->getHost());
            $this->subdomain = $url[0];
        }

        return  is_null($this->store) ?
            self::getShopByDomain($request->capture()->getHost()):
            $this->store;
    }

    public function scopeDomainByCookie(){
        if (!Cookie::has('store')){
           $this->subdomain = self::getSubdomain();
        }
        return  Domain::where('name' , $this->subdomain)->exists() ? Domain::where('name' , $this->subdomain)->first() : '';
    }
    
    public static function getSubdomain(){
        $request = new Request();
        $url = explode('.' , $request->capture()->getHost());
        $subdomain = $url[0];
        return $subdomain;
    }

    public static function isDomainName($value)
    {
        if(!empty($value)){
            return static::where('name' , $value)->exists();
        }
        return 0;
    }

    public static function getShopByDomain($value)
    {
        if(!empty($value)){
            return static::where('name' , $value)->first()->shop;
        }
        return 0;
    }

}
