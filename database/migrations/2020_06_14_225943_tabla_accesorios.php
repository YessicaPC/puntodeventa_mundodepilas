<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaAccesorios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('accesorios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tienda');
            $table->string('marcar');
            $table->string('modelo');
            $table->string('detalle');
            $table->string('precio');
            $table->string('existencia');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesorios');

    }
}
