<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserXTestsTable extends Migration {
  public function up(){
    Schema::create('user_x_tests', function(Blueprint $table){
      $table->id();
      $table->float('nota')->nullable();
      $table->time('duracion', 0);
      $table->boolean('estado')->default(false);
      $table->foreignId('test_id');
      $table->foreignId('user_id');

      // Others
      $table->foreign('test_id')->references('id')->on('tests');
      $table->foreign('user_id')->references('id')->on('usuarios');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('user_x_tests');
  }
}
