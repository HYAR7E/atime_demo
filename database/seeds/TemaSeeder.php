<?php

use App\Tema;
use Illuminate\Database\Seeder;

class TemaSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Tema::create(['nombre' => 'Programación Orientada a Objetos']);
    Tema::create(['nombre' => 'Programación Funcional']);
    Tema::create(['nombre' => 'Condicionamiento Operante']);
    Tema::create(['nombre' => 'Estados del YO']);
  }
}
