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
            $table->date('fecha_inicio')->nullable();
            $table->integer('num_pagos')->nullable();
            $table->smallInteger('num_pagos_rest')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->string('estado');

            $table->foreign('user_id')->references('id')->
            on('users');
            $table->timestamps();
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
