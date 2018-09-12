<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Biografia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Biografia', function (Blueprint $table) {
            $table->increments('Id_Biografia');
            $table->integer('Años_Negocio')->default(0);
            $table->string('Tipos_Trabajo')->nullable();
            $table->string('Intereses')->nullable();
            $table->string('Ciudad_Residencia')->nullable();
            $table->integer('Años_Ciudad')->nullable();
            $table->longtext('Clave_Exito')->nullable();
            $table->longtext('Metas')->nullable();
            $table->longtext('Logros')->nullable();
            $table->string('Producto_estrella')->nullable();
            $table->longtext('Habilidades')->nullable();
            $table->longtext('Referencia_Ideal')->nullable();
            $table->string('Mayor_Problema_Resuelto')->nullable();
            $table->longtext('Mi_Historia_AEI')->nullable();
            $table->longtext('Mi_Socio_Preferencial')->nullable();
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
        Schema::dropIfExists('Biografia');
    }
}
