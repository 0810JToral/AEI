<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogoPS extends Migration
{
    /**
     * Run the migrations.
     *,
     * @return void
     */
    public function up()
    {
        Schema::create('Catalogo_P-S', function (Blueprint $table) {
            $table->increments('Id_P/S');
            $table->string('Nombre_P/S');
            $table->longtext('Descripcion_P/S')->nullable();
            $table->string('Imagen_P/S');
            $table->double('Costo_P/S',6,2)->default(0);
            $table->integer('Descuento_P/S');
            $table->string('Tipo_P/S');
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
        Schema::dropIfExists('Catalogo_P-S');
    }
}
