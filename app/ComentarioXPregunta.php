<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentarioXPregunta extends Model {

  // Belonging
  public function pregunta(){
    return $this->belongsTo('App\Pregunta');
  }
  public function autor(){
    return $this->belongsTo('App\Usuario');
  }
}
