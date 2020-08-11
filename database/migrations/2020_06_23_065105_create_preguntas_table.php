<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration {
  public function up(){
    Schema::create('preguntas', function(Blueprint $table){
      $table->id();
      $table->integer('tipo');
      $table->string('texto');
      $table->string('alternativa_1')->nullable();
      $table->string('alternativa_2')->nullable();
      $table->string('alternativa_3')->nullable();
      $table->string('alternativa_4')->nullable();
      $table->string('alternativa_5')->nullable();
      $table->string('respuesta');
      $table->time('tiempo_limite', 0)->nullable();
      $table->foreignId('test_id');
      $table->foreignId('tema_id');

      // Others
      $table->foreign('test_id')->references('id')->on('tests');
      $table->foreign('tema_id')->references('id')->on('temas');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('preguntas');
  }
}
