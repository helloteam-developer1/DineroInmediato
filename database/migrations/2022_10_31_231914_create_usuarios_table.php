<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('curp');
            $table->string('fecha_nacimiento');
            $table->string('empresa_trabajo'); 
            $table->string('antiguedad');
            $table->string('rama_empresa');
            $table->string('banco_nomina');
            $table->string('telefono_contacto');
            $table->string('email');
            $table->string('contrasena');
            $table->string('ine_frente');
            $table->string('ine_reverso'); 
            $table->string('comp_dom'); 
            $table->string('foto_cine');
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
        Schema::dropIfExists('usuarios');
    }
}
