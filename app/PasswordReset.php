<?php

namespace Tendaz;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table = 'password_resets';

    protected $fillable = ['token' , 'email' ,'shop_id' , 'created_at'];
    
    public $timestamps =  false;
}
