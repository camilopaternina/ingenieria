<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_producto', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('nombre_producto');
            $table->string('descripcion_producto');
            $table->integer('stock');
            $table->integer('vendidos');
            $table->float('precio');
            $table->boolean('visible');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('categoria')->unsigned();
            $table->foreign('categoria')->references('id_categoria')->on('tabla_categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabla_producto');
    }
}
