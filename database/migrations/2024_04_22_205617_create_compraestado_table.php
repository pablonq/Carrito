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
        Schema::create('compraestado', function (Blueprint $table) {
            $table->bigIncrements('idcompraestado')->unique('idcompraestado');
            $table->bigInteger('idcompra')->index('fkcompraestado_1');
            $table->integer('idcompraestadotipo')->index('fkcompraestado_2');
            $table->timestamp('cefechaini')->useCurrent();
            $table->timestamp('cefechafin')->nullable();

            $table->primary(['idcompraestado']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compraestado');
    }
};
