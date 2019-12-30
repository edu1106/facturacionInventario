<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('precio_compra',7,4);
            $table->decimal('precio_uno',7,4);
            $table->decimal('precio_dos',7,4);
            $table->decimal('precio_tres',7,4);
            $table->decimal('precio_cuatro',7,4);
            $table->decimal('precio_cinco',7,4);
            $table->decimal('cantidad_producto',7,4);
            $table->dateTime('fecha_ingreso');
            $table-> dateTime('fecha_vencimiento')->nullable();
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
        Schema::dropIfExists('detalle_productos');
    }
}
