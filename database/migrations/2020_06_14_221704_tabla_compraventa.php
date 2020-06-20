<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaCompraventa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compraventa', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tienda');
            $table->string('IngresoEgreso')->nullable();
            $table->string('tipo');
            $table->string('clave')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('precio');
            $table->string('detalle')->nullable();
            $table->string('fecha');
            $table->string('total');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compraventa');

    }
}
