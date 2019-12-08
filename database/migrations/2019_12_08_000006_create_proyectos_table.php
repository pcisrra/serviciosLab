<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');

            $table->date('fecha_propuesta');

            $table->string('codigo_proyecto');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
