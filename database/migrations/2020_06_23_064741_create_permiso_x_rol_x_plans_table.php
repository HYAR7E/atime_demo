<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoXRolXPlansTable extends Migration {
  public function up(){
    Schema::create('permiso_x_rol_x_plans', function(Blueprint $table){
      $table->string('codigo');  // Handle permission
      $table->string('funcion');
      $table->foreignId('rol_id');
      $table->foreignId('plan_id');

      // Others
      $table->primary('codigo');
      $table->foreign('rol_id')->references('id')->on('rols');
      $table->foreign('plan_id')->references('id')->on('plans');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('permiso_x_rol_x_plans');
  }
}
