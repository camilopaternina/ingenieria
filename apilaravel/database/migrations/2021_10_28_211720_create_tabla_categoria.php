<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_categoria', function (Blueprint $table) {
            $table->bigIncrements('id_categoria');
            $table->string('nombre_categoria');
            $table->bigInteger('referida')->nullable()->unsigned();
            $table->foreign('referida')->references('id_categoria')->on('tabla_categoria');
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
        Schema::dropIfExists('tabla_categoria');
    }
}
