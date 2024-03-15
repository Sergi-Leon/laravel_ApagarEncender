<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
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

            $table->foreignId('rol_id')->nullable()->constrained('tbl_roles');
            $table->foreignId('sede_id')->nullable()->constrained('tbl_sedes');



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