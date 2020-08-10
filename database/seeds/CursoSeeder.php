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
    Curso::create(['nombre' => 'algebra']);
    Curso::create(['nombre' => 'historia']);
    Curso::create(['nombre' => 'programacion I']);
    Curso::create(['nombre' => 'programacion II']);
    Curso::create(['nombre' => 'arquitectura de software I']);
  }
}
