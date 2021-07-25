<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    public function up()
    {
      Schema::create('docentes', function(Blueprint $table){
        $table->id();
        $table->string('nombres');
        $table->string('apellidos');
        $table->foreignId('institucion_id');

        // Others
        $table->foreign('institucion_id')->references('id')->on('institucions');
        $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
