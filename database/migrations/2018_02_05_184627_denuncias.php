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
            $table->integer('id_user')->unsigned();
            $table->binary('foto');
            $table->text('respuesta')->nullable();
            $table->tinyInteger('activa');
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
        $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    }
}
