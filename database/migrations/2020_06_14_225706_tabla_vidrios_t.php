<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaVidriosT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('vidriosT', function (Blueprint $table) {
            $table->id();
            $table->string('marcar');
            $table->string('modelo');
            $table->string('precio');
            $table->string('stock');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vidriosT');

    }
}
