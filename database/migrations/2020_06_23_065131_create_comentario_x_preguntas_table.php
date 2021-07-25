<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioXPreguntasTable extends Migration {
  public function up(){
    Schema::create('comentario_x_preguntas', function (Blueprint $table) {
      $table->id();
      $table->string('contenido');
      $table->foreignId('pregunta_id');
      $table->foreignId('autor_id');
      $table->foreignId('parent_id');

      // Others
      $table->foreign('pregunta_id')->references('id')->on('preguntas');
      $table->foreign('autor_id')->references('id')->on('usuarios');
      $table->foreign('parent_id')->references('id')->on('comentario_x_preguntas');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('comentario_x_preguntas');
  }
}
