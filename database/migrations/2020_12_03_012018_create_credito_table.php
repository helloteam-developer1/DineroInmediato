<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credito', function (Blueprint $table) {
            $table->bigIncrements('num_credito');
            $table->unsignedBigInteger('user_id');
            $table->string('monto_aut');
            $table->date('fecha_inicio');
            $table->integer('num_pagos');
            $table->date('fecha_termino');
            $table->string('estado');

            $table->foreign('user_id')->references('id')->
            on('users');
        });
        
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credito');
    }
}
