<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaImagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_imagen', function (Blueprint $table) {
            $table->bigIncrements('id_imagen');            
            $table->bigInteger('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id_producto')->on('tabla_producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabla_imagen');
    }
}
