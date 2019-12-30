<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyDetalleFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalle_facturas', function (Blueprint $table) {
            $table->unsignedBigInteger('productos_id');
            $table->unsignedBigInteger('encabezadoFactura_id');
            $table->foreign('productos_id')->references('id')->on('productos');            
            $table->foreign('encabezadoFactura_id')->references('id')->on('encabezado_facturas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_facturas', function (Blueprint $table) {
            
        });
    }
}
