<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdsToGPNC extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('GPNC', function (Blueprint $table) {
             $table->unsignedInteger('Id_GPNC_Dado')->nullable();
             $table->foreign('Id_GPNC_Dado')->references('Id_GPNC_Dado')->on('GPNC_Dado');
             $table->unsignedInteger('Id_GPNC_Recibido')->nullable();
             $table->foreign('Id_GPNC_Recibido')->references('Id_GPNC_Recibido')->on('GPNC_Recibido');
         });
     }
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('GPNC', function (Blueprint $table) {
             $table->dropForeign(['Id_GPNC_Dado']);
             $table->dropColumn('Id_GPNC_Dado');
             $table->dropForeign(['Id_GPNC_Recibido']);
             $table->dropColumn('Id_GPNC_Recibido');
         });
     }
}
