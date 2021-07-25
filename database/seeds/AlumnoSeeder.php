<?php

use App\Alumno;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Alumno::create(['id' => 1, 'nombres' => 'name1', 'apellidos' => 'apepat1 apemat1', 'codigo' => '000001', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 2, 'nombres' => 'name2', 'apellidos' => 'apepat2 apemat2', 'codigo' => '000002', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 3, 'nombres' => 'name3', 'apellidos' => 'apepat3 apemat3', 'codigo' => '000003', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 4, 'nombres' => 'name4', 'apellidos' => 'apepat4 apemat4', 'codigo' => '000004', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 5, 'nombres' => 'name5', 'apellidos' => 'apepat5 apemat5', 'codigo' => '000005', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 6, 'nombres' => 'name6', 'apellidos' => 'apepat6 apemat6', 'codigo' => '000006', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 7, 'nombres' => 'name7', 'apellidos' => 'apepat7 apemat7', 'codigo' => '000007', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 8, 'nombres' => 'name8', 'apellidos' => 'apepat8 apemat8', 'codigo' => '000008', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 9, 'nombres' => 'name9', 'apellidos' => 'apepat9 apemat9', 'codigo' => '000009', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 10, 'nombres' => 'name10', 'apellidos' => 'apepat10 apemat10', 'codigo' => '000010', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 11, 'nombres' => 'name11', 'apellidos' => 'apepat11 apemat11', 'codigo' => '000011', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
    Alumno::create(['id' => 12, 'nombres' => 'name12', 'apellidos' => 'apepat12 apemat12', 'codigo' => '000012', 'grado' => '5', 'seccion' => 'A', 'institucion_id' => 1]);
  }
}
