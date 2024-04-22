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
        Schema::table('usuariorol', function (Blueprint $table) {
            $table->foreign(['idrol'], 'fkmovimiento_1')->references(['idrol'])->on('rol')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign(['idusuario'], 'usuariorol_ibfk_2')->references(['idusuario'])->on('usuario')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuariorol', function (Blueprint $table) {
            $table->dropForeign('fkmovimiento_1');
            $table->dropForeign('usuariorol_ibfk_2');
        });
    }
};
