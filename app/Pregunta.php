<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model {

  protected $guarded = ['id'];

  // Belonging
  public function test(){
    return $this->belongsTo('App\Test');
  }
  public function tema(){
    return $this->belongsTo('App\Tema');
  }
}
