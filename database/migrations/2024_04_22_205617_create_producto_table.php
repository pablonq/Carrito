<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigInteger('idproducto', true)->unique('idproducto');
            $table->string('pronombre', 250);
            $table->string('prodetalle', 512);
            $table->integer('procantstock');
            $table->string('tipo', 20);
            $table->string('imagenproducto', 512);

            $table->primary(['idproducto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
