<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration {
  public function up(){
    Schema::create('respuestas', function(Blueprint $table){
      $table->id();
      $table->string('respuesta');
      $table->time('duracion', 0);
      $table->foreignId('userxtest_id');
      $table->foreignId('pregunta_id');

      // Others
      $table->foreign('userxtest_id')->references('id')->on('user_x_tests');
      $table->foreign('pregunta_id')->references('id')->on('preguntas');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('respuestas');
  }
}
