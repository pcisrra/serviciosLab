<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariosTable extends Migration
{
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ci');

            $table->string('nombres');

            $table->string('ap_paterno');

            $table->string('ap_materno')->nullable();

            $table->date('fecha_nacimiento');

            $table->integer('edad')->nullable();

            $table->string('correo')->nullable();

            $table->string('celular')->nullable();

            $table->string('zona_domicilio')->nullable();

            $table->string('ocupacion')->nullable();

            $table->string('tipo_beneficiario');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
