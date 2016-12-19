<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 1/11/16
 * Time: 03:54 PM
 */

namespace Tendaz\Traits;


use Illuminate\Support\Facades\Schema;
use Tendaz\Helpers\GeoClass;
use Tendaz\Models\Country;
use Tendaz\Models\Domain\Domain;
use Tendaz\Scopes\OrderStatusScope;
use Webpatser\Uuid\Uuid;

trait UuidAndShopTrait
{
    public static function boot() {
        parent::boot();
        static::creating(function($model){
            if(Schema::hasColumn($model->getTable() , 'uuid')){
                $model->attributes['uuid'] = Uuid::generate(4)->string;
            }

            if (!isset($model->attributes['shop_id']) && empty($model->attributes['shop_id'])){
                if(Schema::hasColumn($model->getTable() , 'shop_id')){
                    if($model->getTable() != 'domains' && $model->getTable() != 'stores'){
                        $model->attributes['shop_id'] = Domain::ShopByDomain()->id;
                    }
                }
            }

            if(Schema::hasColumn($model->getTable() , 'country_id')){
                $country = Country::where('abbr' ,'=' , GeoClass::query()->countryCode);
                $model->attributes['country_id'] = $country->exists() ? $country->first()->id : 50;
            }
        });
    }
}