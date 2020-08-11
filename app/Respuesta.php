<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model {

  protected $guarded = ['id'];

  // Belonging
  public function userxtest(){
    return $this->belongsTo('App\UserXTest');
  }
  public function pregunta(){
    return $this->belongsTo('App\Pregunta');
  }
  public function check(){
    // Check if answer is right
    $pregunta = $this->belongsTo('App\Pregunta');
    return $this->respuesta == $pregunta->respuesta;
  }
}
