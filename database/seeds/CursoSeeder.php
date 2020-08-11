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
    Curso::create(['nombre' => 'Programación I']);
    Curso::create(['nombre' => 'Programación II']);
    Curso::create(['nombre' => 'Programación III']);
    Curso::create(['nombre' => 'Ingenieria de software I']);
    Curso::create(['nombre' => 'Ingenieria de software II']);
    Curso::create(['nombre' => 'Psicologia social I']);
    Curso::create(['nombre' => 'Psicologia social II']);
    Curso::create(['nombre' => 'Personalidad I']);
    Curso::create(['nombre' => 'Psicoanalisis']);
    Curso::create(['nombre' => 'Filosofia']);
    Curso::create(['nombre' => 'Comportamiento I']);
    Curso::create(['nombre' => 'Literatura I']);
    Curso::create(['nombre' => 'Literatura II']);
  }
}
