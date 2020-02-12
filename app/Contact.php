<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'tel', 'email'];

    public function contact(){

        return $this->belongTo('App\Contact');


   }
}

