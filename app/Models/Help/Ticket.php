<?php

namespace Tendaz\Models\Help;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\User;
use Tendaz\Traits\UuidAndShopTrait;

class Ticket extends Model
{
    use UuidAndShopTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'state', 'subject', 'description','user_id'
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
    
    public function user(){
        return $this->hasOne(User::class);
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    
}