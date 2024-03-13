<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbl_UsuariosTiposIncidencias extends Migration
{
    public function up()
    {
        Schema::create('tbl_usuarios_tipos_incidencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_tipoIncidencia');

            $table->foreign('id_usuario')->references('id')->on('tbl_usuarios')->onDelete('cascade');
            $table->foreign('id_tipoIncidencia')->references('id')->on('tbl_tipos_incidencias')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tbl_usuarios_tipos_incidencias', function (Blueprint $table) {
            $table->dropForeign(['id_usuario']);
            $table->dropForeign(['id_tipoIncidencia']);
        });

        Schema::dropIfExists('tbl_usuarios_tipos_incidencias');
    }
}
