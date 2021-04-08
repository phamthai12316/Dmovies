<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class writer extends Model
{
  public function writer(){
  return $this->hasOne('App\writer');
 }
}
