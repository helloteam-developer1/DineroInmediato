<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmortizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amortizacion', function (Blueprint $table) {
            $table->bigIncrements('id_amortizacion');
            $table->integer('credito_num');
            $table->unsignedBigInteger('user_id');
            $table->integer('num_pagos');
            $table->date('prox_pago');
            $table->integer('pag_capital');
            $table->integer('interes_ordinarios');
            $table->integer('iva_interes_ord');
            $table->integer('comisiones');
            $table->integer('pago_total_men');

            $table->foreign('user_id')->references('id')->on('users');
        });
        
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amortizacion');
    }
}
