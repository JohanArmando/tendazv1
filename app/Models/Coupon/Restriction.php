<?php
/**
 * Created by PhpStorm.
 * User: JuanM
 * Date: 02/12/2016
 * Time: 11:12 AM
 */

namespace Tendaz\Models\Coupon;

use Baum\Extensions\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Restriction  extends Model
{
    public function __construct(array $attributes = null){
        if(count($attributes) > 0){
            $this->attributes['uuid'] = Uuid::generate(4)->string;
            parent::__construct($attributes);
        }
    }

    protected $fillable = ['uuid' , 'min_price'];
    /**
     * @param $value
     */
    public function setMinPriceAttribute($value){
        if(!empty($value)){
            $this->attributes['min_price'] =  is_numeric($value) ? $value : 0;
        }
    }
}