<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_incidencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente')->nullable()->constrained('users');
            $table->foreignId('id_tecnico')->nullable()->constrained('users');
            $table->text('descripcion_inci');
            $table->timestamp('fecha_create_inci')->useCurrent();
            $table->timestamp('fecha_resuelta_inci')->nullable();
            $table->enum('estado_inci', ['SinAsignar', 'Asignada', 'EnTrabajo', 'Resuelta', 'Cerrada']);
            $table->enum('prioridad_inci', ['Alta', 'Media', 'Baja']);
            $table->text('comentario_inci')->nullable();

            $table->foreignId('tipo_incidencia_id')->nullable()->constrained('tbl_tipos_incidencias');
            $table->foreignId('tipo_subincidencia_id')->nullable()->constrained('tbl_tipos_subincidencias');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tbl_incidencias', function (Blueprint $table) {
            $table->dropForeign(['tipo_incidencia_id']);
            $table->dropForeign(['tipo_subincidencia_id']);
            $table->dropForeign(['id_cliente']);
            $table->dropForeign(['id_tecnico']);
        });

        Schema::dropIfExists('tbl_incidencias');
    }
}