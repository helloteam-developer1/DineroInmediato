<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditoVencidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credito_vencido', function (Blueprint $table) {
            $table->id();
            $table->string('num_cliente');
            $table->string('telefono',20);
            $table->string('email');
            $table->string('nombre');
            $table->unsignedBigInteger('num_credito');
            $table->timestamps();

            $table->foreign('num_credito')->references('num_credito')->on('credito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credito_vencido');
    }
}
