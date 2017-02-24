<?php

namespace Tendaz\Models\Social;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;
use Webpatser\Uuid\Uuid;

class SocialLogin extends Model
{
    use UuidAndShopTrait, WhereShopTrait;

    protected $table = 'social_login';
    protected $fillable  = ['uuid' , 'app_id' , 'app_secret' , 'provider', 'shop_id'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    
}
