<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model {

  // Belonging
  public function test(){
    return $this->hasMany('App\Test');
  }
  public function tema(){
    return $this->belongsTo('App\Tema');
  }
}
