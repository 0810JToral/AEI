<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdsToTestimonio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('Testimonio', function (Blueprint $table) {
             $table->unsignedInteger('Id_Testimonio_Recibido')->nullable();
             $table->unsignedInteger('Id_Testimonio_Dado')->nullable();
             $table->foreign('Id_Testimonio_Recibido')->references('Id_Testimonio_Recibido')->on('Testimonio_Recibido');
             $table->foreign('Id_Testimonio_Dado')->references('Id_Testimonio_Dado')->on('Testimonio_Dado');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('Testimonio', function (Blueprint $table) {
             $table->dropForeign(['Id_Testimonio_Recibido']);
             $table->dropColumn('Id_Testimonio_Recibido');
             $table->dropForeign(['Id_Testimonio_Dado']);
             $table->dropColumn('Id_Testimonio_Dado');

         });
     }
}
