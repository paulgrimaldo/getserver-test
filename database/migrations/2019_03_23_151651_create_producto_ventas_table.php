<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('producto_id');
            $table->unsignedInteger('venta_id');

            //Constraints
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_ventas');
    }
}
