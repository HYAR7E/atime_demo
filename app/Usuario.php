<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

  // Belonging
  public function rol(){
    return $this->belongsTo('App\Rol');
  }
  public function institucion(){
    return $this->belongsTo('App\Rol');
  }
}
