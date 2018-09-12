<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerfilEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Perfil_Empresa', function (Blueprint $table) {
            $table->increments('Id_Empresa');
            $table->string('Nombre_Empresa');
            $table->string('Tipo_Empresa');
            $table->string('Giro_Empresa');
            $table->string('Servicio_Empresa')->nullable();
            $table->string('Producto_Empresa')->nullable();
            $table->string('Logo_Empresa');
            $table->string('Horario_Atencion')->nullable();
            $table->integer('Telefono_Fijo_Empressa');
            $table->integer('Telefono_Movil_Empresa')->nullable();
            $table->string('Correo_Electronico_Empresa')->unique();
            $table->longtext('Direccion_Empresa');
            $table->string('Pag_Web_Empresa')->unique();
            $table->string('Red_Social_Twitter_Empresa')->unique();
            $table->string('Red_Social_Facebook_Empresa')->unique();
            $table->string('Red_Social_Instagram')->unique();
            $table->string('Red_Social_Whatsapp')->unique();
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
        Schema::dropIfExists('Perfil_Empresa');
    }
}
