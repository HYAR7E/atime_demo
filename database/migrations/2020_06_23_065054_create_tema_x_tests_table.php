<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemaXTestsTable extends Migration {
  public function up(){
    Schema::create('tema_x_tests', function(Blueprint $table){
      $table->id();
      $table->foreignId('tema_id');
      $table->foreignId('test_id');

      // Others
      $table->foreign('tema_id')->references('id')->on('temas');
      $table->foreign('test_id')->references('id')->on('tests');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('tema_x_tests');
  }
}
