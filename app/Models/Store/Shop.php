<?php

namespace Tendaz\Models\Store;

use Tendaz\Models\Country;
use Tendaz\Models\Domain\Domain;
use Tendaz\Models\Payment_method\PaymentMethod;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Subscription\Plan;
use Tendaz\Models\Subscription\Subscription;
use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;

class Shop extends Model
{
    use UuidAndShopTrait;
    /**
     * @param array|null $attributes
     * @throws \Exception
     */
    public function __construct(array $attributes = null){
        if(count($attributes) > 0){
            if (!isset($attributes['country_base_operation_id']))
            {
                $this->setCountryBaseOperationId('');
            }
            if (!isset($attributes['theme_id']))
            {
                $this->attributes['theme_id'] = 1;
            }
            parent::__construct($attributes);
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name', 'logo', 'active', 'user_id', 'theme_id', 'country_base_operation_id' , 'original' , 'slug'
    ];

    /**
     * Setters
     */
    

    public function setCountryBaseOperationId(){
        $this->attributes['country_base_operation_id'] = 1;
    }

    /**
     * Set the name attribute and automatically the slug
     *
     * @param string $name
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        if(!$this->exists)
        {
            $this->setUniqueName($name, '');
        }
    }


    public function setLogoAttribute($path){
        if(!empty($path)){
            $name = $path->getClientOriginalName();
            $this->attributes['logo'] = $name;
            if(!\Storage::disk('logos')->has( $this->attributes['id'].'/'.$name))
                \Storage::disk('logos')->put( $this->attributes['id'].'/'.$name, \File::get($path));
        }else{
            $this->attributes['path'] = '';
        }
    }

    /**
     * Recursive routine to set a unique slug
     *
     * @param string $name
     * @param mixed $extra
     */
    public function setUniqueName($name, $extra)
    {
        $slug = str_slug($name . '-' . $extra);

        if (static::whereSlug($slug)->exists())
        {
            $this->setUniqueName($name, $extra + 1);
            return;
        }

        $this->attributes['slug'] = $slug;
        $this->attributes['name'] = str_replace('-' , '' ,$this->attributes['slug']);
    }
    /**
     * RELATIONSHIPS
     */
    
    public function store(){
        return $this->hasOne(Store::class);
    }

    public function plan(){
        return $this->belongsToMany(Plan::class , 'subscriptions')->withPivot('end_at' , 'start_at' , 'trial_at' , 'amount');
    }

    public function subscription(){
        return $this->hasMany(Subscription::class);
    }
    
    public function domains(){
        return $this->hasMany(Domain::class , 'shop_id');
    }

    public function domainMain(){
        return $this->domains()->where('main' , 1);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }  
    public function template(){
        return $this->belongsTo(Theme::class , 'theme_id');
    }

    public function country(){
        return $this->belongsTo(Country::class , 'country_base_operation_id');
    }

    public function base(){
        return $this->belongsTo(Country::class , 'country_base_operation_id');
    }

    public function mercadopago(){
        return $this->belongsToMany(PaymentMethod::class, 'payment_values')->where('payment_methods.id' , 1)->withPivot('client_id' , 'client_secret');
    }
    
}
