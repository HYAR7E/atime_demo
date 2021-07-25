<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscripcionsTable extends Migration {
  public function up(){
    Schema::create('suscripcions', function(Blueprint $table){
      $table->string('codigo');  // Payment Unique Code
      $table->integer('pago');
      $table->date('fecha_pago');  // Can handle payment in advance
      $table->date('fecha_fin');
      $table->boolean('estado');  // Current | Over
      $table->foreignId('institucion_id');
      $table->foreignId('plan_id');

      // Others
      $table->primary('codigo');
      $table->foreign('institucion_id')->references('id')->on('institucions');
      $table->foreign('plan_id')->references('id')->on('plans');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('suscripcions');
  }
}
