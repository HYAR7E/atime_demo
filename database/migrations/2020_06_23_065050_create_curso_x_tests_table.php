<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoXTestsTable extends Migration {
  public function up(){
    Schema::create('curso_x_tests', function(Blueprint $table){
      $table->id();
      $table->foreignId('curso_id');
      $table->foreignId('test_id');

      // Others
      $table->foreign('curso_id')->references('id')->on('cursos');
      $table->foreign('test_id')->references('id')->on('tests');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('curso_x_tests');
  }
}
