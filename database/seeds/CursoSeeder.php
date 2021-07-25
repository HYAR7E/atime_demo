<?php

use App\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Curso::create(['id' => 1, 'nombre' => 'Comunicacion', 'docente_id' => 1]);
    Curso::create(['id' => 2, 'nombre' => 'Educacion para el Trabajo', 'docente_id' => 2]);
    Curso::create(['id' => 3, 'nombre' => 'Matematica', 'docente_id' => 3]);
    Curso::create(['id' => 4, 'nombre' => 'Educacion Fisica', 'docente_id' => 4]);
    Curso::create(['id' => 5, 'nombre' => 'Ciencia, Tecnologia y Ambiente', 'docente_id' => 5]);
    Curso::create(['id' => 6, 'nombre' => 'Ingles', 'docente_id' => 6]);
    Curso::create(['id' => 7, 'nombre' => 'Arte', 'docente_id' => 7]);
    Curso::create(['id' => 8, 'nombre' => 'Educacion Religiosa', 'docente_id' => 7]);
    Curso::create(['id' => 9, 'nombre' => 'Castellano', 'docente_id' => 7]);
    Curso::create(['id' => 10, 'nombre' => 'Taller Musica', 'docente_id' => 7]);
    Curso::create(['id' => 11, 'nombre' => 'Taller Ajedrez', 'docente_id' => 7]);
    Curso::create(['id' => 12, 'nombre' => 'Taller Actuacion', 'docente_id' => 7]);
  }
}
