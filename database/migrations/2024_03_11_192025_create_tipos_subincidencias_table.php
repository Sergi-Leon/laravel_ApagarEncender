<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposSubIncidenciasTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_tipos_subincidencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo_tiposubinci');
            $table->foreignId('tipo_incidencia_id')->nullable()->constrained('tbl_tipos_incidencias');
            $table->text('descripcion_tiposubinci')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tbl_tipos_subincidencias', function (Blueprint $table) {
            $table->dropForeign(['tipo_incidencia_id']);
        });
        
        Schema::dropIfExists('tbl_tipos_subincidencias');
    }
};