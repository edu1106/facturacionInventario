<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proveedors', function (Blueprint $table) {
            $table->unsignedBigInteger('nit_id')->unique();
            $table->unsignedBigInteger('direccion_id');
            $table->unsignedBigInteger('telefono_id');
            $table->foreign('nit_id')->references('id')->on('nits');
            $table->foreign('direccion_id')->references('id')->on('direccions');
            $table->foreign('telefono_id')->references('id')->on('telefonos');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proveedors', function (Blueprint $table) {
            //
        });
    }
}
