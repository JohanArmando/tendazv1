<?php

namespace Tendaz\Models\Help;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\User;
use Tendaz\Traits\UuidAndShopTrait;

class TicketsComment extends Model
{
    use UuidAndShopTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'content', 'ticket_id','user_id'
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
    //RELATHIONTICKET
    public function ticket(){
        return $this->hasOne(Ticket::class);
    }
    public function getRouteKeyName()
    {
        return 'uuid';
    }
    
}