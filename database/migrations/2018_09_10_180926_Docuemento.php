<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Docuemento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Documento', function (Blueprint $table) {
            $table->increments('Id_Documento');
            $table->string('Nombre_Documento');
            $table->string('Categoria_Documento');
            $table->boolean('Privacidad_Documento')->default(0);
            $table->string('Ruta_Documento');
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
        Schema::dropIfExists('Documento');
    }
}
