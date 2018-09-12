<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdsToCatalogo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('Catalogo_P-S', function (Blueprint $table) {
             $table->unsignedInteger('Id_Usuario')->nullable();
             $table->unsignedInteger('Id_Empresa')->nullable();
             $table->foreign('Id_Usuario')->references('Id_Usuario')->on('users');
             $table->foreign('Id_Empresa')->references('Id_Empresa')->on('Perfil_Empresa');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('Catalogo_P-S', function (Blueprint $table) {
             $table->dropForeign(['Id_Usuario']);
             $table->dropColumn('Id_Usuario');
             $table->dropForeign(['Id_Empresa']);
             $table->dropColumn('Id_Empresa');

         });
     }
}
