<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'tel',
    ];



    /* TODO Relation pour récupérer les contacts d'un utilisateur */

   public function contact(){

        return $this->hasMany('App\Contact', 'contact_id');
    }
    

}




