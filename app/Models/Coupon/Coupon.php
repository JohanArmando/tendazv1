<?php

namespace Tendaz\Models\Coupon;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Categories\Category;
use Tendaz\Models\Order\Order;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Coupon extends Model
{
    use UuidAndShopTrait,WhereShopTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'code', 'type', 'value','limit_uses','limit_dates','max_uses','available','start_date','end_date','shop_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function shop(){
        return $this->hasOne(Shop::class);
    }

    public function restrictions(){
        return $this->hasOne(Restriction::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class , 'coupon_categories' , 'coupon_id' , 'category_id')->withPivot('category_id');
    }

    public function orders(){
        return $this->belongsToMany(Order::class , 'coupon_redemption' ,'coupon_id' , 'order_id');
    }
        
    public static function byCode($code)
    {
        return static::where('code' , $code)->first();
    }

    public static function CreateWithRestrictions($array){
        $coupon =  Coupon::create($array);
        $restrictions = isset($array['restrictions']) ? $array['restrictions'] : ['min_price' => 0];
        $coupon->restrictions()->save(new Restriction($restrictions));
        return $coupon;
    }

    public function setMaxUsesAttribute($value)
    {
        $this->attributes['max_uses'] = is_numeric($value) ? intval($value) : 0;
    }

    //mutators setters
    /**
     * @param $value
     */
    public function setValueAttribute($value){

        if($value > 100  && $this->type == 'percentage'){
            $this->attributes['value'] = 100 ;

        }elseif ($value < 0 || empty($value)    ){
            $this->attributes['value'] = 0;
        }else{
            $this->attributes['value'] = $value;
        }
    }

    /**
     * @param $value
     */
    public function setStartDateAttribute($value){
        if(!empty($value)) {
            $date = str_replace('/', '-', $value);
            $this->attributes['start_date'] = date('Y-m-d', strtotime($date));
        }
    }


    /**
     * @param $value
     */
    public function setEndDateAttribute($value){
        if(!empty($value)){
            $date = str_replace('/', '-', $value);
            $this->attributes['end_date'] =  date('Y-m-d', strtotime($date));
        }
    }

    public  function scopeGetByCondition($query , $code, Cart $cart){
        return $query->ByMaxUses($code)->ByActive()->ByCartPrice($cart)->ByDates()->first();
    }

    public function scopeByMaxUses($query , $code){
        return $query->whereHas('orders' , function ($q){
            $q->havingRaw('COUNT(*) < coupons.max_uses');
        })->orWhere('limit_uses' , 0)->Bycode($code);
    }
    public function scopeByCartPrice($query , Cart $cart){
        return $query->whereHas('restrictions' , function ($q) use ($cart){
            $q->where('min_price', '<=' , $cart->totalProducts())
                ->orWhereNull('min_price');;
        });
    }

    public function scopeByDates($query){
        return  $query->ByStartDate()->ByEndDate();
    }

    public function scopeByEndDate($query){
        $query->where(function($q) {
            $q->where('end_date' , '>=' , Carbon::today()->toDateString())
                ->orWhereNull('end_date');
        });
    }

    public function scopeByStartDate($query){
        return $query->where(function($q) {
            $q->whereDate('start_date' , '<=' , Carbon::today()->toDateString())
                ->orWhereNull('start_date');
        });
    }

    public function scopeByActive($query){
        $query->where('available' , 1);
    }

    public function scopeByCode($query , $code){
        return $query->where('code' , $code);
    }

}