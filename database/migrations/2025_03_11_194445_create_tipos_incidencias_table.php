<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposIncidenciasTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_tipos_incidencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo_tipoinci');
            $table->text('descripcion_tipoinci')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_tipos_incidencias');
    }
};
