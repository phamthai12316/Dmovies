<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{


  protected $fillable = [
      'firstname', 'lastname', 'password','email','comments'
  ];
}
