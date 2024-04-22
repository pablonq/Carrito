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
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigInteger('idusuario', true)->unique('idusuario');
            $table->string('usnombre', 50);
            $table->string('uspass', 50);
            $table->string('usmail', 50);
            $table->timestamp('usdeshabilitado')->nullable();

            $table->primary(['idusuario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
