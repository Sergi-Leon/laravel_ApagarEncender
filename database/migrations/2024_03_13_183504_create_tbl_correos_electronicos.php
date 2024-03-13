<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbl_CorreosElectronicos extends Migration
{
    public function up()
    {
        Schema::create('tbl_correos_electronicos', function (Blueprint $table) {
            $table->id('id_correo');
            $table->unsignedBigInteger('id_usuario');
            $table->string('mensaje_correo', 255);

            $table->foreign('id_usuario')->references('id')->on('tbl_usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tbl_correos_electronicos', function (Blueprint $table) {
            $table->dropForeign(['id_usuario']);
        });

        Schema::dropIfExists('tbl_correos_electronicos');
    }
}
