<?php

use App\Institucion;
use Illuminate\Database\Seeder;

class InstitucionSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Institucion::create(['id' => 1, 'nombre' => 'Colegio Secundaria', 'contacto' => '983098487']);
    Institucion::create(['id' => 2, 'nombre' => 'UDH', 'contacto' => '912054887']);
  }
}
