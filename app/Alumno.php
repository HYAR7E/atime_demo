<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {

  public $fillable = ['nombres', 'apellidos', 'codigo', 'grado', 'seccion'];

  public function institucion(){
    return $this->belongsTo('App\Institucion');
  }
}
