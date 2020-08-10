<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

//  implements \Illuminate\Contracts\Auth\Authenticatable
class Usuario extends Authenticatable {

  // protected $fillable = ['nickname', 'password', 'email', 'rol_id', 'institucion_id'];
  protected $guarded = [];

  // Belonging
  public function rol(){
    return $this->belongsTo('App\Rol');
  }
  public function institucion(){
    return $this->belongsTo('App\Institucion');
  }
  public function descripcion_rol(){
    return $this->rol->nombre;
  }
  public function descripcion_institucion(){
    return $this->institucion->nombre;
  }
}
