<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasCalculadora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculadoras', function (Blueprint $table) {
            $table->id();
            $table->string('prestamo');
            $table->string('tiempo');
            $table->string('nombre',40);
            $table->string('trabajo');
            $table->string('ingreso');
            $table->string('nomina');
            $table->string('credito');
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
        Schema::dropIfExists('calculadoras');
    }
}
