<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaMensaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_mensaje', function (Blueprint $table) {
            $table->uuid('id_mensaje')->primary();
            $table->string('contenido');
            $table->boolean('leido');
            $table->bigInteger('emisor')->unsigned();
            $table->bigInteger('receptor')->unsigned();
            $table->foreign('emisor')->references('id')->on('users');
            $table->foreign('receptor')->references('id')->on('users');
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
        Schema::dropIfExists('tabla_mensaje');
    }
}
