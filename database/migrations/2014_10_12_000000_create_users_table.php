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
            $table->id();
            $table->string('nombre');
            $table->string('curp');
            $table->string('fecha_nacimiento');
            $table->string('empresa_trabajo'); 
            $table->string('antiguedad');
            $table->string('rama_empresa');
            $table->string('banco_nomina');
            $table->string('telefono_contacto');
            $table->string('ine_frente');
            $table->string('ine_reverso'); 
            $table->string('comp_dom'); 
            $table->string('foto_cine');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
