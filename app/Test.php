<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {

  protected $guarded = ['id'];

  // Belonging
  public function cursos(){
    return $this->hasMany('App\CursoXTest');
  }
  public function temas(){
    return $this->hasMany('App\TemaXTest');
  }
  public function autor(){
    return $this->belongsTo('App\Usuario', 'autor_id');
  }
  public function preguntas(){
    return $this->hasMany('App\Pregunta');
  }
  public function count_q(){
    return Pregunta::where('test_id', $this->id)->count();
  }
  public function count_tries(){
    return UserXTest::where('test_id', $this->id)->count();
  }
}
