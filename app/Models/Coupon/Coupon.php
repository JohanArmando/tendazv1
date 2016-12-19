<?php

namespace Tendaz\Models\Coupon;

use Illuminate\Database\Eloquent\Model;
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

    //RELATHIONUSER

    public function shop(){
        return $this->hasOne(Shop::class);
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function restrictions(){
        return $this->hasOne(Restriction::class);
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

}