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

            $table->foreignId('id_usuario')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tbl_chat', function (Blueprint $table) {
            $table->dropForeign(['id_usuario']);
        });

        Schema::dropIfExists('tbl_chat');
    }
}
