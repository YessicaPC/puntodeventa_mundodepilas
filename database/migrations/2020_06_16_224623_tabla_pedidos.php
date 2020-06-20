<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tienda');
            $table->string('tipo');
            $table->string('descripcion');
            $table->string('abono')->nullable();
            $table->string('precio');
            $table->string('cantidad');
            $table->string('fecha_a_recoger')->nullable();
            $table->string('estado');
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
        Schema::dropIfExists('pedido');

    }
}
