<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescripcionEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcion_empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email_empresa',60);
            $table->string('nombre_empresa',100);
            $table->string('descripcion_rol_empresa');
            $table->string('url_imagen');
            $table->string('configuracion_precio_venta',20);
            $table->string('moneda',3);
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
        Schema::dropIfExists('descripcion_empresas');
    }
}
