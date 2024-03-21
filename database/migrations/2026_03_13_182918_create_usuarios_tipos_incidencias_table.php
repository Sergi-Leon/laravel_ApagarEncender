<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTiposIncidenciasTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_usuarios_tipos_incidencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('id_tipoIncidencia')->nullable()->constrained('tbl_tipos_incidencias')->onDelete('cascade');

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
