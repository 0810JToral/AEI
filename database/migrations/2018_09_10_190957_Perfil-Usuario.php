<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerfilUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Perfil_Usuario', function (Blueprint $table) {
            $table->increments('Id_Perfil');
            $table->longtext('Nombre(s)');
            $table->string('Apellido_Paterno');
            $table->string('Apellido_Materno');
            $table->DateTime('Fecha_Nacimiento');
            $table->string('Sexo');
            $table->longtext('Direccion');
            $table->integer('Telefono_Fijo');
            $table->integer('Telefono_Movil');
            $table->string('Area_Profesional');
            $table->string('Cedula_Profesional')->unique()->nullable();
            $table->string('Imagen');
            $table->DateTime('Horario_Atencion');
            $table->string('Pag_Web')->unique();
            $table->string('Red_Social_Facebook')->unique();
            $table->string('Red_Social_Twitter')->unique();
            $table->string('Red_Social_Whatsapp')->unique();
            $table->string('Red_Social_Instagram')->unique();
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
        Schema::dropIfExists('Perfil_Usuario');
    }
}
