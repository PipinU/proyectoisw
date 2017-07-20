<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_coffe')->unsigned();
            $table->integer('id_client')->unsigned();
            $table->integer('id_personal')->unsigned();
            $table->integer('monto');
            $table->string('hora');
            $table->string('fecha');
            $table->string('descripcion');
            $table->foreign('id_coffe')->references('id')->on('coffes');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_personal')->references('id')->on('personals');
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
        Schema::drop('orders');
    }
}
