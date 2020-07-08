<?php

use App\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Rol::create(['nombre' => 'alumno']);
    Rol::create(['nombre' => 'docente']);
  }
}
