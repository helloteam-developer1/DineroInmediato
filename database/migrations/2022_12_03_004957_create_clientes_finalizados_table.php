<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesFinalizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_finalizados', function (Blueprint $table) {
            $table->bigIncrements('id_cliente_finalizado');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('credito_num');
            
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('clientes_finalizados');
    }
}
