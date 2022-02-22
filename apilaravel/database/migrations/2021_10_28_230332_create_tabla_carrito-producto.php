<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaCarritoProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_carrito-producto', function (Blueprint $table) {
            $table->bigInteger('carrito')->unsigned();
            $table->foreign('carrito')->references('id_carrito')->on('tabla_carrito');
            $table->bigInteger('producto')->unsigned();
            $table->foreign('producto')->references('id_producto')->on('tabla_producto');
            $table->integer('cantidad');
            $table->float('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
