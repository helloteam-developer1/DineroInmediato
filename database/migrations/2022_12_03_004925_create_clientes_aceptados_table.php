<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesAceptadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_aceptados', function (Blueprint $table) {
            $table->bigIncrements('id_cliente_aceptado');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('credito_num');
            $table->string('nombre', 45);
            $table->timestamps();
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
        Schema::dropIfExists('clientes_aceptados');
    }
}
