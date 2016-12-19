<?php

namespace Tendaz\Models\Order;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\User;

class Consult extends Model
{
    protected $table = 'consults';
    protected $fillable = ['allowed' , 'message' ,'phone' , 'user_id'];

    public function user(){
        return $this->belongsTo('Tendaz\User');
    }

    public static function findOrCreateUser($data){
        $user = Consult::findUser($data['email']);
        if($user){
            Consult::createNews($user);
        }else{
            $user = Consult::createUser($data);
            Consult::createNews($user);
        }
    }
    
    public static function createUser($data){
        $user = User::create([
            'email' => $data['email'],
            'type' => 'users',
        ]);
        return $user;
    }
    
    public static function findUser($email){
        return User::where('email' , $email)->first();
    }

    public static function createNews($user){
        Consult::create([
            'user_id' => $user->id,
            'message' => ''
        ]);
    }

    public function setMessageAttribute($value){
        if(empty($value)){
            $this->attributes['message'] = 'Pedido de inscripci&oacute;n a newsletter';
        }
    }

    public function setPhoneAttribute($value){
        $this->phone = '';
    }
    public function setAllowedAttribute($value){
        $this->allowed = 0;
    }
}
