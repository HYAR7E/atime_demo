<?php

use App\Docente;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Docente::create(['id' => '1', 'nombres' => '', 'apellidos' => 'apepat1 apemat1', 'institucion_id' => 1]);
    Docente::create(['id' => '2', 'nombres' => '', 'apellidos' => 'apepat2 apemat2', 'institucion_id' => 1]);
    Docente::create(['id' => '3', 'nombres' => '', 'apellidos' => 'apepat3 apemat3', 'institucion_id' => 1]);
    Docente::create(['id' => '4', 'nombres' => '', 'apellidos' => 'apepat4 apemat4', 'institucion_id' => 1]);
    Docente::create(['id' => '5', 'nombres' => '', 'apellidos' => 'apepat5 apemat5', 'institucion_id' => 1]);
    Docente::create(['id' => '6', 'nombres' => '', 'apellidos' => 'apepat6 apemat6', 'institucion_id' => 1]);
    Docente::create(['id' => '7', 'nombres' => '', 'apellidos' => 'apepat7 apemat7', 'institucion_id' => 1]);
  }
}
