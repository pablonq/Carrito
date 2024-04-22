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
        Schema::table('compraestado', function (Blueprint $table) {
            $table->foreign(['idcompra'], 'fkcompraestado_1')->references(['idcompra'])->on('compra')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign(['idcompraestadotipo'], 'fkcompraestado_2')->references(['idcompraestadotipo'])->on('compraestadotipo')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compraestado', function (Blueprint $table) {
            $table->dropForeign('fkcompraestado_1');
            $table->dropForeign('fkcompraestado_2');
        });
    }
};
