<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->unsignedBigInteger('nit_id');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('direccion_id');
            $table->foreign('nit_id')->references('id')->on('nits');
            $table->foreign('persona_id')->references('id')->on('personas');
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
        Schema::table('clientes', function (Blueprint $table) {
            //
        });
    }
}
