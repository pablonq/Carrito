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
        Schema::create('compraitem', function (Blueprint $table) {
            $table->bigIncrements('idcompraitem')->unique('idcompraitem');
            $table->bigInteger('idproducto')->index('fkcompraitem_2');
            $table->bigInteger('idcompra')->index('fkcompraitem_1');
            $table->integer('cicantidad');

            $table->primary(['idcompraitem']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compraitem');
    }
};
