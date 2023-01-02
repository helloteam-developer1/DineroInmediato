<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('curp');
            $table->string('fecha_nacimiento');
            $table->string('empresa_trabajo'); 
            $table->string('rama_empresa');
            $table->string('antiguedad');
            $table->string('banco_nomina');
            $table->string('telefono_contacto');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('ine_frente');
            $table->string('ine_reverso'); 
            $table->string('comp_dom'); 
            $table->string('foto_cine');
            $table->string('prestamo');
            $table->string('tiempo');
            $table->string('trabajo');
            $table->string('ingreso');
            $table->string('nomina');
            $table->string('credito');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
