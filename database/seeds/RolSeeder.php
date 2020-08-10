<?php

use App\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Rol::create(['id' => 1, 'nombre' => 'administrador']);
    Rol::create(['id' => 2, 'nombre' => 'docente']);
    Rol::create(['id' => 3, 'nombre' => 'alumno']);
  }
}
