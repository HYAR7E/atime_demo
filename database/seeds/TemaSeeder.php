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
    Tema::create(['nombre' => 'Peliculas']);
    Tema::create(['nombre' => 'Literatura juvenil']);
    Tema::create(['nombre' => 'Lectura breve']);
    Tema::create(['nombre' => 'Analisis de personalidad']);
    Tema::create(['nombre' => 'Psicologia de la filosofia']);
    Tema::create(['nombre' => 'Modelos de comportamiento colectivo']);
  }
}
