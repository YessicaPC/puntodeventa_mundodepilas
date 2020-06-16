<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaReparacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('repacioncelulares', function (Blueprint $table) {
            $table->id();
            $table->string('marcar');
            $table->string('modelo');
            $table->string('reparacion');
            $table->string('detalle');
            $table->string('cliente');
            $table->string('telefono');
            $table->string('fecha');
            $table->string('precio');
            $table->string('abono');
            $table->string('total');
            $table->string('estado');
            $table->string('fecha_de_entrega');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repacioncelulares');

    }
}
