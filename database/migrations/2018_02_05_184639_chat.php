<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('chat', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_user')->unsigned();
            $table->binary('tipo');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    }
}
