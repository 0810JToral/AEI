<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestimonioDado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Testimonio_Dado', function (Blueprint $table) {
            $table->increments('Id_Testimonio_Dado');
            $table->longtext('Descripcion_Testimonio');
            $table->integer('Valoracion_Testimonio')->default(3);
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
        Schema::dropIfExists('Testimonio_Dado');
    }
}
