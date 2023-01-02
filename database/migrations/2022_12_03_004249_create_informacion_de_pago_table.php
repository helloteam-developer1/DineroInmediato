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
            $table->bigIncrements('id_forma_de_pago');
            $table->string('titular',45);
            $table->string('banco',45);
            $table->string('num_tarjeta', 45);
            $table->string('num_cuenta',45);
            $table->string('clave_inter', 45);
            $table->unsignedBigInteger('user_id');

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
