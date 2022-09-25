<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlLibrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_libras', function (Blueprint $table) {
            $table->id();
            $table->varchar('desc_func');
            $table->varchar('desc_proc');
            $table->varchar('siglas');
            $table->varchar('nom_aplic');
            $table->varchar('funcion');
            $table->varchar('plataforma');
            $table->enum('tipo_cliente',['interno','externo', 'ambos','N/D']);
            $table->enum('criticidad',['baja','media','alta']);
            $table->enum('edo_aplic',['operativo','no operativo']);
            $table->varchar('maquina');
            $table->enum('amb_calidad',['si','no']);
            $table->enum('fuente',['si','no']);
            $table->varchar('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bl_libras');
    }
}
