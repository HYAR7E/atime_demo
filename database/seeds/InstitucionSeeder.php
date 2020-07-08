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
    Institucion::create(['nombre' => 'UNHEVAL', 'contacto' => '983098487']);
    Institucion::create(['nombre' => 'UDH', 'contacto' => '912054887']);
  }
}
