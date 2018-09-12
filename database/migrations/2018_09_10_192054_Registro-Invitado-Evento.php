<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistroInvitadoEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Registro_Invitado_Evento', function (Blueprint $table) {
            $table->increments('Id_Invitado');
            $table->string('Nombre_Invitado');
            $table->string('Apellido_Invitado');
            $table->string('Correo_Electronico_Invitado')->unique();
            $table->integer('Edad_Invitado');
            $table->string('Sexo_Invitado');
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
        Schema::dropIfExists('Registro_Invitado_Evento');
    }
}
