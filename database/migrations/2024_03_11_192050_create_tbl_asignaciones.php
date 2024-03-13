<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbl_Asignaciones extends Migration
{
    public function up()
    {
        Schema::create('tbl_asignaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gestor');
            $table->unsignedBigInteger('id_tecnico');
            $table->unsignedBigInteger('id_incidencia');

            $table->foreign('id_gestor')->references('id')->on('tbl_usuarios');
            $table->foreign('id_tecnico')->references('id')->on('tbl_usuarios');
            $table->foreign('id_incidencia')->references('id')->on('tbl_incidencias');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tbl_asignaciones', function (Blueprint $table) {
            $table->dropForeign(['id_gestor']);
            $table->dropForeign(['id_tecnico']);
            $table->dropForeign(['id_incidencia']);
        });
        
        Schema::dropIfExists('tbl_asignaciones');
    }
};