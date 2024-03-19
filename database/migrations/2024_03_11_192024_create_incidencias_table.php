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
            $table->string('categoria_inci');
            $table->string('subcategoria_inci');
            $table->text('descripcion_inci');
            $table->timestamp('fecha_create_inci')->useCurrent();
            $table->timestamp('fecha_resuelta_inci')->nullable();
            $table->enum('estado_inci', ['SinAsignar', 'Asignada', 'EnTrabajo', 'Resuelta', 'Cerrada']);
            $table->enum('prioridad_inci', ['Alta', 'Media', 'Baja']);
            $table->text('comentario_inci')->nullable();

            $table->foreignId('id_cliente')->nullable()->constrained('tbl_usuarios');
            $table->foreignId('id_tecnico')->nullable()->constrained('tbl_usuarios');

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