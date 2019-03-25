<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('total');
            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('usuario_id');
            $table->unsignedInteger('sucursal_id');
            $table->timestamps();


            //Constraints
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
