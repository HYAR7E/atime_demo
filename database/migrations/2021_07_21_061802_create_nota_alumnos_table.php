<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaAlumnosTable extends Migration
{
    public function up()
    {
      Schema::create('nota_alumnos', function(Blueprint $table){
        $table->id();
        $table->float('nota')->nullable();
        $table->foreignId('alumno_id');
        $table->foreignId('curso_id');
        $table->foreignId('trimestre_id');

        // Others
        $table->foreign('curso_id')->references('id')->on('cursos');
        $table->foreign('alumno_id')->references('id')->on('alumnos');
        $table->foreign('trimestre_id')->references('id')->on('trimestres');
        $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('nota_alumnos');
    }
}
