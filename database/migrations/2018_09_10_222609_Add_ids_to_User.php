<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdsToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('Id_Perfil')->nullable();
            $table->unsignedInteger('Id_Biografia')->nullable();
            $table->unsignedInteger('Id_Empresa')->nullable();
            $table->foreign('Id_Empresa')->references('Id_Empresa')->on('Perfil_Empresa');
            $table->foreign('Id_Perfil')->references('Id_Perfil')->on('Perfil_Usuario');
            $table->foreign('Id_Biografia')->references('Id_Biografia')->on('Biografia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['Id_Perfil']);
            $table->dropColumn('Id_Perfil');
            $table->dropForeign(['Id_Biografia']);
            $table->dropColumn('Id_Biografia');
            $table->dropForeign(['Id_Empresa']);
            $table->dropColumn('Id_Empresa');
        });
    }
}
