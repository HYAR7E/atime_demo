<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrimestresTable extends Migration
{
    public function up()
    {
      Schema::create('trimestres', function(Blueprint $table){
        $table->id();
        $table->string('numero');
        $table->string('year');
        $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('trimestres');
    }
}
