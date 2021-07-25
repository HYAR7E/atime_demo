<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

  public $fillable = ['nombre'];

  public function count_tests(){
    return CursoXTest::where('curso_id', $this->id)->count();
  }
  public function tests(){
    return $this->hasMany('App\CursoXTest');
  }
  public function docente(){
    return $this->belongsTo('App\Docente');
  }
}
