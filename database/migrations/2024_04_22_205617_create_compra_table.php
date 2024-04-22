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
        Schema::create('compra', function (Blueprint $table) {
            $table->bigInteger('idcompra', true)->unique('idcompra');
            $table->timestamp('cofecha')->useCurrentOnUpdate()->useCurrent();
            $table->bigInteger('idusuario')->index('fkcompra_1');

            $table->primary(['idcompra']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
};
