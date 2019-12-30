<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresas', function (Blueprint $table) {
       
          
 $table->unsignedBigInteger('nit_id');
 $table->unsignedBigInteger('descripcionEmpresa_id');
 $table->unsignedBigInteger('resolucion_id');
 $table->unsignedBigInteger('regimen_id');
 $table->unsignedBigInteger('telefono_id');
 $table->unsignedBigInteger('direccion_id');
 $table->foreign('nit_id')->references('id')->on('nits');
 $table->foreign('descripcionEmpresa_id')->references('id')->on('descripcion_empresas');
 $table->foreign('resolucion_id')->references('id')->on('resoluciones');
 $table->foreign('regimen_id')->references('id')->on('regimens');
 $table->foreign('telefono_id')->references('id')->on('telefonos');
 $table->foreign('direccion_id')->references('id')->on('direccions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresas', function (Blueprint $table) {
            //
        });
    }
}
