<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class director extends Model
{
    public function movies(){

      return $this->hasOne('App\movies');
    }
}
