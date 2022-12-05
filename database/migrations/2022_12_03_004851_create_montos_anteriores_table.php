<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMontosAnterioresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('montos_anteriores', function (Blueprint $table) {
            $table->bigIncrements('id_monto_anterior');
            $table->unsignedBigInteger('credito_num');
            $table->date('fecha');
            $table->integer('monto_aut');
            
            $table->foreign('credito_num')->references('num_credito')->on('credito');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('montos_anteriores');
    }
}
