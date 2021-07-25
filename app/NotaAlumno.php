<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaAlumno extends Model {

  public $fillable = ['nota', 'alumno_id', 'curso_id', 'trimestre_id'];

  public function curso(){
    return $this->belongsTo('App\Curso');
  }
  public function alumno(){
    return $this->belongsTo('App\Alumno');
  }
  public function trimestre(){
    return $this->belongsTo('App\Trimestre');
  }
}
