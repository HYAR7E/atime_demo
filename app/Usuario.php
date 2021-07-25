<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

//  implements \Illuminate\Contracts\Auth\Authenticatable
class Usuario extends Authenticatable {

  // protected $fillable = ['nickname', 'password', 'email', 'rol_id', 'institucion_id'];
  protected $guarded = [];

  // Belonging
  public function rol(){
    return $this->belongsTo('App\Rol');
  }
  public function institucion(){
    return $this->belongsTo('App\Institucion');
  }
  public function descripcion_rol(){
    return $this->rol->nombre;
  }
  public function descripcion_institucion(){
    return $this->institucion->nombre;
  }
  public function count_tries(){
    return UserXTest::where('user_id', $this->id)->count();
  }
  public function count_tries_array(){
    return UserXTest::select('cursos.id', 'cursos.nombre', DB::raw('COUNT(cursos.id)'))
      ->where('user_id', $this->id)
      ->join('curso_x_tests', 'user_x_tests.test_id', '=', 'curso_x_tests.test_id')
      ->join('cursos', 'curso_x_tests.curso_id', '=', 'cursos.id')
      ->groupBy('curso_id')->get();
  }
  public function average_performance_tries(){
    return UserXTest::select(DB::raw('AVG(nota) as av'))
      ->where('user_id', $this->id)
      ->get();
  }
  public function average_performance_time(){
    $queryset = UserXTest::select('respuestas.duracion', 'respuestas.created_at', DB::raw('TIME(respuestas.created_at) as time'))
      ->where('user_id', $this->id)
      ->join('preguntas', 'preguntas.test_id', '=', 'user_x_tests.test_id')
      ->join('respuestas', 'respuestas.pregunta_id', '=', 'preguntas.id')
      ->distinct('respuestas.id')->orderBy('respuestas.created_at')->get();

    $array_duracion = [];
    $i=0;
    foreach($queryset as $q){
      $i++;
      // Convertir a segundos (hora, minuto, segundo)
      $duracion = (int) substr($q['duracion'], -2);
      $duracion += (int) substr($q['duracion'], -5, 2) *60;
      $duracion += (int) substr($q['duracion'], 0, 2) *3600;
      array_push($array_duracion, ['tiempo' => $duracion, 'i' => $i]);
    }
    $array_duracion = json_encode($array_duracion);
    return $array_duracion;
  }
}
