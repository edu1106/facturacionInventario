<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyRegimensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('regimens', function (Blueprint $table) {
            $table->unsignedBigInteger('impuesto_id');
            $table->foreign('impuesto_id')->references('id')->on('impuestos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('regimens', function (Blueprint $table) {
            //
        });
    }
}
