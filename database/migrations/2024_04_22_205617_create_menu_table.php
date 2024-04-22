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
        Schema::create('menu', function (Blueprint $table) {
            $table->bigInteger('idmenu')->unique('idmenu');
            $table->string('menombre', 100)->comment('Nombre del item del menu');
            $table->string('medescripcion', 124)->comment('Descripcion mas detallada del item del menu');
            $table->bigInteger('idpadre')->nullable()->index('fkmenu_1')->comment('Referencia al id del menu que es subitem');
            $table->timestamp('medeshabilitado')->nullable()->useCurrent()->comment('Fecha en la que el menu fue deshabilitado por ultima vez');

            $table->primary(['idmenu']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
};
