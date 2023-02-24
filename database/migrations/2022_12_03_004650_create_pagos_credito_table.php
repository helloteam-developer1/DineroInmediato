<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos_credito', function (Blueprint $table) {
            $table->bigIncrements('id_pago');
            $table->unsignedBigInteger('num_credito');
            $table->integer('numero_pagos');
            $table->date('fecha_pago');
            $table->integer('monto_pago');
            $table->integer('saldo_insoluto');
            $table->integer('pago_rest');
            $table->integer('resta_pagar');
            $table->timestamps();
            
            $table->foreign('num_credito')->
            references('num_credito')->on('credito');
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos_credito');
    }
}
