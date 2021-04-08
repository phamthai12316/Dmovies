<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
  public function actor(){

    return $this->hasOne('App\actor');
  }
}
