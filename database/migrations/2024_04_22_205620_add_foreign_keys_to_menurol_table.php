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
        Schema::table('menurol', function (Blueprint $table) {
            $table->foreign(['idmenu'], 'fkmenurol_1')->references(['idmenu'])->on('menu')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign(['idrol'], 'fkmenurol_2')->references(['idrol'])->on('rol')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menurol', function (Blueprint $table) {
            $table->dropForeign('fkmenurol_1');
            $table->dropForeign('fkmenurol_2');
        });
    }
};
