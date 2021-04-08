<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class year extends Model
{
  public function year(){
  return $this->hasOne('App\year');
 }
}
