<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdsToRegistroEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('Registro_Evento', function (Blueprint $table) {
             $table->unsignedInteger('Id_Usuario')->nullable();
             $table->unsignedInteger('Id_Evento')->nullable();
             $table->foreign('Id_Usuario')->references('Id_Usuario')->on('users');
             $table->foreign('Id_Evento')->references('Id_Evento')->on('Evento');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('Registro_Evento', function (Blueprint $table) {
             $table->dropForeign(['Id_Usuario']);
             $table->dropColumn('Id_Usuario');
             $table->dropForeign(['Id_Evento']);
             $table->dropColumn('Id_Evento');

         });
     }
}
