<?php

namespace Tendaz\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Tendaz\Models\Store\Shop;
use Tendaz\Models\Subscription\Subscription;
use Tendaz\Notifications\UserResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Tendaz\Traits\UuidAndShopTrait;

class User extends Authenticatable
{
    use Notifiable ,UuidAndShopTrait;

    /**
     * @param array|null $attributes
     * @throws \Exception
     */
    public function __construct(array $attributes = null){
        if(count($attributes) > 0){
            if (!isset($attributes['country_id']))
            {
                $this->setCountryIdAttribute('');
            }
            parent::__construct($attributes);
        }
    }
    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPassword($token));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name', 'last_name', 'phone', 'active', 'email', 'password', 'identification', 'notes', 'image', 'country_id' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //RELATHIONSHIP
    
    public function shop(){
        return $this->hasOne(Shop::class);
    }

    /**
     * GETTERS AND SETTERS
     */

    //SETTERS

    public function setNameAttribute($value)
    {
        if(empty($value)){
            $this->attributes['name'] = '';
        }else{
            $this->attributes['name'] = $value;
        }
    }
    public function setLastNameAttribute($value)
    {
        if(empty($value)){
            $this->attributes['last_name'] = '';
        }else{
            $this->attributes['last_name'] = $value;
        }
    }
    public function setPasswordAttribute($value)
    {
        if(!empty($value)){
            $this->attributes['password'] = bcrypt($value);
        }else{
            $this->attributes['password'] = '';
        }
    }
    public function setIdentificationAttribute($value)
    {
        if(empty($value)){
            $this->attributes['identification'] = '';
        }else{
            $this->attributes['identification'] = $value;
        }
    }
    public function setNotesAttribute($value)
    {
        if(empty($value)){
            $this->attributes['notes'] = '';
        }else{
            $this->attributes['notes'] = $value;
        }
    }
    public function setCountryIdAttribute($value)
    {
            $this->attributes['country_id'] = 1;
    }

    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->last_name;
    }

    public function originalSubscription(){
        return $this->hasMany(Subscription::class)->orderBy('created_at','DESC');
    }

    /**
     * @param $path
     */
    public function setImageAttribute($path){
        if(! empty($path)){
            if ($path->getError()){
                return redirect()->back()->with('message' , ['type' => 'error' , 'message' => 'La imagen supera los 2MB permitidos']);
            }
            $name = Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['image'] = $name;
            \Storage::disk('profile')->put($name, \File::get($path));
        }
    }

}