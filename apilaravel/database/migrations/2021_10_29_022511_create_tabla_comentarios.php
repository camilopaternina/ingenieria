<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_comentarios', function (Blueprint $table) {
            $table->bigIncrements('id_comentarios');
            $table->bigInteger('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id_producto')->on('tabla_producto');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('comentario');
            $table->bigInteger('respuesta')->unsigned()->nullable();
            $table->foreign('respuesta')->references('id_comentarios')->on('tabla_comentarios');
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
        Schema::dropIfExists('tabla_comentarios');
    }
}
