<?php

namespace Tendaz\Models\Store;

use Tendaz\Models\Country;
use Tendaz\Models\Domain\Domain;
use Tendaz\Models\Payment_method\PaymentMethod;
use Tendaz\Models\Payment_method\PaymentValue;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Subscription\Plan;
use Tendaz\Models\Subscription\Subscription;
use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\SubscriptionTrait;
use Tendaz\Traits\UuidAndShopTrait;

class Shop extends Model
{
    use UuidAndShopTrait , SubscriptionTrait;
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
        'uuid', 'name', 'logo', 'active', 'user_id', 'theme_id', 'country_base_operation_id' ,
        'original' , 'slug' , 'slider1' , 'slider2' , 'slider3' , 'slider4' , 'subscription_id'
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
            $this->attributes['logo'] = '';
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

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }

    public function subscription(){
        return $this->hasMany(Subscription::class)->where('id' , $this->subscription_id)->first();
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
        return $this->belongsToMany(PaymentMethod::class, 'payment_values')->where('payment_methods.id' , 1)->withPivot('api_id' , 'api_key');
    }
    public function payments_values(){
        return $this->belongsToMany(PaymentMethod::class, 'payment_values')->where('avaliable' ,1);
    } 
    
    public function payments_methods(){
        return $this->hasMany(PaymentValue::class);
    }

    public function hasAnyPlan($plans)
    {
        if (is_array($plans)){
            foreach ($plans as $plan){
                if($this->hasPlan($plan)){
                 return true;
                }
            }
        }else{
            if($this->hasPlan($plans)){
                return true;
            }
        }
    }

    public function hasPlan($plan)
    {
        return $this->subscription()->plan_id >= Plan::findName($plan)->id;
    }

    public function isSubscribed()
    {
        //si la subscripcion seleccionada es grtatuira
        //si la subscripcion que tiene el usuario esta activa
        //si la subscripcion seleccionada el tiempo que le queda y que notifique
        //si la subscripcion seleccionada esta vencida
        //revisar reactivar la subscripcion
    }

    //Detalles a revisar al crear una nueva subscripcion se va a guardar con trials end, entonces revisar esa parte
    //revisar estados de la subscripcion es decir activa cancelada suspendida
    //revisar el cambio de supscripcion por una que aun esta activa el lisdato de subscripciones
    //revisar el cambio de plan en una subscripcion gratuita
    //revisar el cambio de plan ahcia arriba y hacia abajo de una subscripcion activa

    public function subscribeTo(Plan $plan , $trials = null)
    {
        $subscription = $this->subscriptions()->save(
            new Subscription([
                'trial_at' => $trial ?? $this->datesForTest() ,
                'amount' => $plan->price ,
                'plan_id' => $plan->id
            ])
        );

        return $subscription;
    }


}
