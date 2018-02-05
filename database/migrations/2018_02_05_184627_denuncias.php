<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Denuncias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('denuncias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('desc');
            $table->dateTime('fecha');
            $table->integer('id_user')->unsigned();
            $table->string('foto');
            $table->text('respuesta');
            $table->binary('activa');
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
        Schema::dropIfExists('denuncias');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    }
}
