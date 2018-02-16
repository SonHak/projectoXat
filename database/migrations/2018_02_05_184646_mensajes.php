<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::enableForeignKeyConstraints();
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->date('fecha');
            $table->text('mensaje');
            $table->integer('id_chat')->unsigned();;

            $table->timestamps();

             $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_chat')->references('id')->on('chat');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
        #$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    }
}
