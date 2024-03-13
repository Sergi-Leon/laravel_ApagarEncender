<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbl_Incidencias extends Migration
{
    public function up()
    {
        Schema::create('tbl_incidencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_tecnico')->nullable();
            $table->string('categoria_inci');
            $table->string('subcategoria_inci');
            $table->text('descripcion_inci');
            $table->timestamp('fecha_create_inci')->useCurrent();
            $table->timestamp('fecha_resuelta_inci')->nullable();
            $table->enum('estado_inci', ['SinAsignar', 'Asignada', 'EnTrabajo', 'Resuelta', 'Cerrada']);
            $table->enum('prioridad_inci', ['Alta', 'Media', 'Baja']);
            $table->text('comentario_inci')->nullable();

            $table->foreign('id_cliente')->references('id')->on('tbl_usuarios');
            $table->foreign('id_tecnico')->references('id')->on('tbl_usuarios')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tbl_incidencias', function (Blueprint $table) {
            $table->dropForeign(['id_cliente']);
            $table->dropForeign(['id_tecnico']);
        });

        Schema::dropIfExists('tbl_incidencias');
    }
};