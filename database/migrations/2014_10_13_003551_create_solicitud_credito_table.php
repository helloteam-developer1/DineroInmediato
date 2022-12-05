<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_credito', function (Blueprint $table) {
            $table->bigIncrements('id_credito');
            $table->integer('monto');
            $table->unsignedBigInteger('user_id');
            $table->date('fecha_solicitud');
            $table->string('estado');
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
        Schema::dropIfExists('solicitud_credito');
    }
}
