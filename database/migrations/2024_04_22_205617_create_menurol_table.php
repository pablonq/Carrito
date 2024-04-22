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
        Schema::create('menurol', function (Blueprint $table) {
            $table->bigInteger('idmenu');
            $table->bigInteger('idrol')->index('fkmenurol_2');

            $table->primary(['idmenu', 'idrol']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menurol');
    }
};
