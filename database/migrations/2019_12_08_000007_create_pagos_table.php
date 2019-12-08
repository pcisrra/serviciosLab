<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');

            $table->date('fecha_pago');

            $table->decimal('monto', 15, 2);

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
