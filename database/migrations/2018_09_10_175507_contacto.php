<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contacto', function (Blueprint $table) {
            $table->increments('Id_Contacto');
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
        Schema::dropIfExists('Contacto');
    }
}
