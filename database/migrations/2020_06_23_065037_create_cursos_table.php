<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration {
  public function up(){
    Schema::create('cursos', function(Blueprint $table){
      $table->id();
      $table->string('nombre')->unique();
      $table->foreignId('docente_id');

      $table->foreign('docente_id')->references('id')->on('docentes');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('cursos');
  }
}
