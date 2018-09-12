<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GPNCDado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GPNC_Dado', function (Blueprint $table) {
            $table->increments('Id_GPNC_Dado');
            $table->string('Tipo_GPNC');
            $table->string('Tipo_Referencia');
            $table->longtext('Comentario_GPNC');
            $table->integer('Id_Usuario');
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
        Schema::dropIfExists('GPNC_Dado');
    }
}
