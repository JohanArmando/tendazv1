<?php

namespace Tendaz\Models;

use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Order\Consult;
use Tendaz\Models\Order\Order;
use Tendaz\Models\Store\Shop;
use Tendaz\Notifications\CustomerResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Models\Address\Address;
use Tendaz\Traits\WhereShopTrait;

class Customer extends Authenticatable
{
    use Notifiable , UuidAndShopTrait, WhereShopTrait;
    
    protected static $user = false;

    protected $with = 'shipping';

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomerResetPassword($token));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name', 'last_name', 'type', 'phone', 'active', 'email', 'password', 'identification', 'notes', 'profile', 'country_id' , 'shop_id' , 'social' , 'remember_token'
    ];
    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->last_name;
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    //RELATHIONSHIP

    public function shop(){
        return $this->belongsTo(Shop::class);
    }
    
    public function carts()
    {
       return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cartsOpen()
    {
       return $this->carts()->where('status' , 'open');
    }
    
    public function hasPendingCart()
    {
        return $this->carts()->where('status' , 'open')->count() ? true : false;
    }

    public function addresses(){
        return $this->belongsToMany(Address::class , 'customer_address' , 'customer_id' , 'address_id')
            ->withPivot('id' , 'uuid' , 'isActive' , 'isShipping' , 'isBilling' , 'isPrimary');
    }

    public function addressesForShipping(){
        return $this->addresses()->where('isActive' , 1)->where('isShipping' , 1);
    }
    public function shipping(){
        return $this->addresses()->wherePivot('isPrimary' , 1);
    }
    

    public function addressesForBilling(){
        return $this->addresses()->where('isActive' , 1)->where('isShipping',0);
    }

    public function scopeAddressShipping(){
        return  auth('web')->check()  && auth('web')->user()->addresses()->count() ? auth('web')->user()->addressesForShipping : ' ' ;
    }

    public function scopeAddressBilling(){
        return  auth('web')->check()  && auth('web')->user()->addresses()->count() ? auth('web')->user()->addressesForBilling : ' ' ;
    }
    //Funcion static para buscar y actualizar contraseña de usuario
    public static function findAndUpdatePassword($data){
        self::$user = Customer::where('email' , $data['email'])->first();
        if(self::$user){
            return self::updatePassword($data['password']);
        }else{
            return false;
        }
    }
    public static function updatePassword($password){
        self::$user->fill(['password' => $password]);
        self::$user->save();
        return true;
    }
    public function setPasswordAttribute($value)
    {
        if(!empty($value)){
            $this->attributes['password'] = bcrypt($value);
        }else{
            $this->attributes['password'] = '';
        }
    }

    public function total(){
        return (float) $this->orders()->sum('total');
    }

    public function eagerTotal(){
            return $this->hasMany(Order::class)
                ->selectRaw('sum(total) as total, customer_id')
                ->groupBy('customer_id');
    }

    public function totalOrder(){
        return (int) $this->orders()->count();
    }
    public function latestOrder()
    {
        return $this->hasMany(Order::class)->latest();
    }
    
    public function consults()
    {
        return $this->hasMany(Consult::class);
    }
    
    public function totalConsult()
    {
        return (int) $this->consults()->count();
    }  
    
    public function minOrder()
    {
        return $this->orders()->min('created_at');
    }
}
