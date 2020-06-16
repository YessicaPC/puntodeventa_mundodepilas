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
        Schema::create('celulares', function (Blueprint $table) {
            $table->id();
            $table->string('marcar');
            $table->string('modelo');
            $table->string('detalle');
            $table->string('precio');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celulares');

    }
}
