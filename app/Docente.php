<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model {

  public $fillable = ['nombres', 'apellidos'];

  public function institucion(){
    return $this->belongsTo('App\Institucion');
  }
}
