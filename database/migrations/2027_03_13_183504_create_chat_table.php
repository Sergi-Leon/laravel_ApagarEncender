<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_chat', function (Blueprint $table) {
            $table->id();
            $table->string('mensaje_chat', 255);
            $table->foreignId('remitente_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('destinatario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('incidencia_id')->nullable()->constrained('tbl_incidencias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tbl_chat', function (Blueprint $table) {
            $table->dropForeign(['remitente_id']);
            $table->dropForeign(['destinatario_id']);
            $table->dropForeign(['incidencia_id']);
        });

        Schema::dropIfExists('tbl_chat');
    }
}
