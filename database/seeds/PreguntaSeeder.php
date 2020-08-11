<?php

use App\Pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder {
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    Pregunta::create([
      'tipo' => 1,
      'texto' => 'Los objetos heredan los atributos y metodos de la clase a la cuál extienden',
      'alternativa_1' => 'Verdadero',
      'alternativa_2' => 'Falso',
      'respuesta' => 'Verdadero',
      'test_id' => '1',
      'tema_id' => '1',
    ]);
    Pregunta::create([
      'tipo' => 2,
      'texto' => 'Según sus palabras, cuál es la mayor ventaja que supone el uso de clases y objetos?',
      'respuesta' => 'tiempo',
      'test_id' => '1',
      'tema_id' => '1',
    ]);
    Pregunta::create([
      'tipo' => 1,
      'texto' => 'Los bucles existen en la programación funcional?',
      'alternativa_1' => 'Sí',
      'alternativa_2' => 'No',
      'respuesta' => 'No',
      'test_id' => '2',
      'tema_id' => '2',
    ]);
    Pregunta::create([
      'tipo' => 1,
      'texto' => 'Qué son las funciones anidadas?',
      'alternativa_1' => 'Funciones que están relacionadas unas a otras como una cadena',
      'alternativa_2' => 'Funciones que se llaman unas a otras bajo una jerarquia',
      'alternativa_3' => 'Funciones que se ejecutan a sí mismas en un proceso diferente',
      'respuesta' => 'Funciones que se ejecutan a sí mismas en un proceso diferente',
      'test_id' => '2',
      'tema_id' => '2',
    ]);
    Pregunta::create([
      'tipo' => 1,
      'texto' => 'Qué animal no uso Skinner para demostrar el condicionamiento operante?',
      'alternativa_1' => 'perro',
      'alternativa_2' => 'raton',
      'alternativa_3' => 'paloma',
      'alternativa_4' => 'gato',
      'respuesta' => 'gato',
      'test_id' => '3',
      'tema_id' => '3',
    ]);
    Pregunta::create([
      'tipo' => 1,
      'texto' => 'El condicionamiento operante esta basado en refuerzos y castigos',
      'alternativa_1' => 'Verdadero',
      'alternativa_2' => 'Falso',
      'respuesta' => 'Verdadero',
      'test_id' => '3',
      'tema_id' => '3',
    ]);
    Pregunta::create([
      'tipo' => 1,
      'texto' => 'Cuál es el nombre del personaje principal?',
      'alternativa_1' => 'Sara',
      'alternativa_2' => 'Salvador',
      'alternativa_3' => 'Sandro',
      'alternativa_4' => 'Salvatore',
      'respuesta' => 'Salvatore',
      'test_id' => '4',
      'tema_id' => '5',
    ]);
    Pregunta::create([
      'tipo' => 1,
      'texto' => 'Cree ud. que la estructuración de comportamiento entre Salvatore y Harmony esta fundamentada bajo la teoria de condicionamiento operante? ¿Por qué?',
      'respuesta' => 'refuerzo positivo',
      'test_id' => '4',
      'tema_id' => '3',
    ]);
    Pregunta::create([
      'tipo' => 2,
      'texto' => 'Cree ud. que es "natural" el gusto de Matt por Nitzsche?',
      'respuesta' => 'No',
      'test_id' => '5',
      'tema_id' => '7',
    ]);
    Pregunta::create([
      'tipo' => 1,
      'texto' => 'La filosofia personal de Andrew tarde o temprano lo llevaria al punto de quiebre que se muestra en la pelicula, aún si no tuviera sus poderes',
      'alternativa_1' => 'Verdadero',
      'alternativa_2' => 'Falso',
      'respuesta' => 'Falso',
      'test_id' => '5',
      'tema_id' => '7',
    ]);
  }
}
