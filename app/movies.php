<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
     public function director(){
     return $this->belongsTo('App\director');
}
     public function genre(){
     return $this->belongsTo('App\genre');
}
     public function actor(){
     return $this->belongsTo('App\actor');
}
     public function actress(){
     return $this->belongsTo('App\actress');
}
     public function writer(){
     return $this->belongsTo('App\writer');
}
     public function year(){
     return $this->belongsTo('App\year');
}


}
