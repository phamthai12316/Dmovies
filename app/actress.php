<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actress extends Model
{
   public function actress(){
   return $this->hasOne('App\actress');
  }
}
