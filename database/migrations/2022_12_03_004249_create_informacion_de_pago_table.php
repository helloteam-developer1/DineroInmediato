<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionDePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_de_pago', function (Blueprint $table) {
            $table->bigIncrements('id_pago');
            $table->string('titular');
            $table->string('num_cuenta');
            $table->string('banco');
            $table->string('clave_inter');
            $table->string('num_tarjeta');
            $table->smallInteger('fecha_mm');
            $table->smallInteger('fecha_yy');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
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
        Schema::dropIfExists('informacion_de_pago');
    }
}
