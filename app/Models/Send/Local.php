<?php

namespace Tendaz\Models\Send;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Local extends Model
{
    use WhereShopTrait , UuidAndShopTrait;
    
    protected $table = 'locals';
    protected $fillable = ['name','description','shop_id','principal' , 'uuid'];

    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
