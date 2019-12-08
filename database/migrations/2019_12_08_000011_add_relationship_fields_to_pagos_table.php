<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPagosTable extends Migration
{
    public function up()
    {
        Schema::table('pagos', function (Blueprint $table) {
            $table->unsignedInteger('usuario_cobra_id');

            $table->foreign('usuario_cobra_id', 'usuario_cobra_fk_680516')->references('id')->on('users');

            $table->unsignedInteger('beneficiario_pago_id');

            $table->foreign('beneficiario_pago_id', 'beneficiario_pago_fk_680517')->references('id')->on('beneficiarios');
        });
    }
}
