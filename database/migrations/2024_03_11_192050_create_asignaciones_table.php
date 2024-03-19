<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionesTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_asignaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_gestor')->nullable()->constrained('tbl_usuarios');
            $table->foreignId('id_tecnico')->nullable()->constrained('tbl_usuarios');
            $table->foreignId('id_incidencia')->nullable()->constrained('tbl_incidencias');

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