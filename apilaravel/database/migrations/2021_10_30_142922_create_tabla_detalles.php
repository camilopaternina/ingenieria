<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_detalles', function (Blueprint $table) {
            $table->uuid('id_detalle')->primary();
            $table->char('factura',36);
            $table->foreign('factura')->references('id_factura')->on('tabla_factura');
            $table->bigInteger('producto')->unsigned();
            $table->foreign('producto')->references('id_producto')->on('tabla_producto');
            $table->integer('cantidad');
            $table->float('precio');
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
        Schema::dropIfExists('tabla_detalles');
    }
}
