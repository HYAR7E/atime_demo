<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoXTest extends Model {

  protected $guarded = ['id'];

  // Belonging
  public function curso(){
    return $this->belongsTo('App\Curso');
  }
  public function test(){
    return $this->belongsTo('App\Test');
  }
}
