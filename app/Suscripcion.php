<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model {

  // Belonging
  public function institucion(){
    return $this->belongsTo('App\Institucion');
  }
  public function plan(){
    return $this->belongsTo('App\Plan');
  }
}
