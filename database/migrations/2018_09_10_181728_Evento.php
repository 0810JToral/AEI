<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evento', function (Blueprint $table) {
            $table->increments('Id_Evento');
            $table->string('Nombre_Evento');
            $table->longtext('Descripcion_Evento');
            $table->DateTime('Fecha_Registro_Evento');
            $table->integer('Duracion_Evento')->default(0);
            $table->longtext('Direccion_Evento');
            $table->integer('Num_Invitados')->default(0);
            $table->integer('Costo')->default(0);
            $table->string('Ponente');
            $table->string('Organizador');
            $table->string('Correo_Electronico_Organizador')->unique();
            $table->integer('Telefono_Organizador')->default(0);
            $table->boolean('Estado_Evento')->default(0);
            $table->unsignedInteger('Id_Usuario')->nullable();
            $table->foreign('Id_Usuario')->references('Id_Usuario')->on('users');
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
        Schema::dropIfExists('Evento');
    }
}
