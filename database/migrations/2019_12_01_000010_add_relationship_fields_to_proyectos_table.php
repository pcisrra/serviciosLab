<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProyectosTable extends Migration
{
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->unsignedInteger('cliente_id');

            $table->foreign('cliente_id', 'cliente_fk_680507')->references('id')->on('beneficiarios');

            $table->unsignedInteger('maquina_asignada_id');

            $table->foreign('maquina_asignada_id', 'maquina_asignada_fk_680508')->references('id')->on('maquinas');

            $table->unsignedInteger('usuario_acepta_id');

            $table->foreign('usuario_acepta_id', 'usuario_acepta_fk_680510')->references('id')->on('users');

            $table->unsignedInteger('usuario_cargo_id');

            $table->foreign('usuario_cargo_id', 'usuario_cargo_fk_680511')->references('id')->on('users');
        });
    }
}
