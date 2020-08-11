<?php

use App\Test;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Test::create([
      'titulo' => 'Clases y objetos',
      'descripcion' => "Conceptos básicos",
      'publicado' => true,
      'autor_id' => 2,
    ]);
    Test::create([
      'titulo' => 'Programación funcional',
      'descripcion' => "Conceptos básicos, completa el código",
      'publicado' => true,
      'autor_id' => 2,
    ]);
    Test::create([
      'titulo' => 'Condicionamiento operante',
      'descripcion' => "Interpretación de los resultados obtenidos por Skinner",
      'publicado' => true,
      'autor_id' => 2,
    ]);
    Test::create([
      'titulo' => 'Me dicen Sara Tomate',
      'descripcion' => "Descripción de los personajes, referencias a literatura",
      'publicado' => true,
      'autor_id' => 2,
    ]);
    Test::create([
      'titulo' => 'Analisis de pelicula: Chronicles',
      'descripcion' => "Análisis de personalidad de los personajes, modelos de comportamiento colectivo y psicología de la filosofia",
      'publicado' => true,
      'autor_id' => 2,
    ]);
  }
}
