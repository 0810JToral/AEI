<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdsToDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('Documento', function (Blueprint $table) {
             $table->unsignedInteger('Id_Usuario')->nullable();
             $table->foreign('Id_Usuario')->references('Id_Usuario')->on('users');
         });
     }
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('Documento', function (Blueprint $table) {
             $table->dropForeign(['Id_Usuario']);
             $table->dropColumn('Id_Usuario');

         });
     }
}
