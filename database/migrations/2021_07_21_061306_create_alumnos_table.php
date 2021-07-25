<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    public function up()
    {
      Schema::create('alumnos', function(Blueprint $table){
        $table->id();
        $table->string('nombres');
        $table->string('apellidos');
        $table->string('codigo');
        $table->string('seccion');
        $table->string('grado');
        $table->foreignId('institucion_id');

        // Others
        $table->foreign('institucion_id')->references('id')->on('institucions');
        $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
