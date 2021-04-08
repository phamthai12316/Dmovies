<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
  public function genre(){

    return $this->hasMany('App\genre');
  }
}
