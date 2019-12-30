<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyDetalleProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalle_productos', function (Blueprint $table) {
         
 $table->unsignedBigInteger('producto_id');
 $table->unsignedBigInteger('bodega_id');
 $table->unsignedBigInteger('proveedor_id');
 $table->foreign('producto_id')->references('id')->on('productos');
 $table->foreign('bodega_id')->references('id')->on('bodegas');
 $table->foreign('proveedor_id')->references('id')->on('proveedors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_productos', function (Blueprint $table) {
            //
        });
    }
}
