<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbl_Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_user');
            $table->string('email_user')->unique();
            $table->string('password_user');
            $table->integer('rol_id')->unsigned();
            $table->integer('sede_id')->unsigned();

            $table->foreign('rol_id')->references('id')->on('tbl_roles');
            $table->foreign('sede_id')->references('id')->on('tbl_sedes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_usuarios', function (Blueprint $table) {
            $table->dropForeign(['rol_id']);
            $table->dropForeign(['sede_id']);
        });

        Schema::dropIfExists('tbl_usuarios');
    }
};