<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration {
  public function up(){
    Schema::create('usuarios', function(Blueprint $table){
      $table->id();
      $table->string('nickname');
      $table->string('password');
      $table->string('email');
      $table->foreignId('rol_id');
      $table->foreignId('institucion_id');

      // Others
      $table->foreign('rol_id')->references('id')->on('rols');
      $table->foreign('institucion_id')->references('id')->on('institucions');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('usuarios');
  }
}
