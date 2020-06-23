<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration {
  public function up(){
    Schema::create('tests', function(Blueprint $table){
      $table->id();
      $table->string('descripcion');
      $table->time('tiempo_limite', 0);
      $table->string('email');
      $table->foreignId('autor_id');

      // Others
      $table->foreign('autor_id')->references('id')->on('usuarios');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('tests');
  }
}
