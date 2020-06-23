<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntuacion extends Model {

  // Belonging
  public function test(){
    return $this->belongsTo('App\Test');
  }
  public function autor(){
    return $this->belongsTo('App\Usuario');
  }
}
