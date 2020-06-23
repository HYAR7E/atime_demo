<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration {
  public function up(){
    Schema::create('plans', function(Blueprint $table){
      $table->id();
      $table->string('nombre');
      $table->integer('precio');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('plans');
  }
}
