<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioXTestsTable extends Migration {
  public function up(){
    Schema::create('comentario_x_tests', function(Blueprint $table){
      $table->id();
      $table->string('contenido');
      $table->foreignId('test_id');
      $table->foreignId('autor_id');
      $table->foreignId('parent_id');

      // Others
      $table->foreign('test_id')->references('id')->on('tests');
      $table->foreign('autor_id')->references('id')->on('usuarios');
      $table->foreign('parent_id')->references('id')->on('comentario_x_tests');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('comentario_x_tests');
  }
}
