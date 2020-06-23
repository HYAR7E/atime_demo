<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntuacionsTable extends Migration {
  public function up(){
    Schema::create('puntuacions', function(Blueprint $table){
      $table->id();
      $table->integer('valor');
      $table->foreignId('test_id');
      $table->foreignId('autor_id');

      // Others
      $table->foreign('test_id')->references('id')->on('tests');
      $table->foreign('autor_id')->references('id')->on('usuarios');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('puntuacions');
  }
}
