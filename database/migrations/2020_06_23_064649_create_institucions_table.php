<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionsTable extends Migration {
  public function up(){
    Schema::create('institucions', function(Blueprint $table){
      $table->id();
      $table->string('nombre');
      $table->string('contacto');
    });
  }

  public function down(){
    Schema::dropIfExists('institucions');
  }
}
