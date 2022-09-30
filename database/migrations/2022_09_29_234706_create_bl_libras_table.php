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
            $table->string('desc_func');
            $table->string('desc_proc');
            $table->string('siglas');
            $table->string('nom_aplic');
            $table->string('funcion');
            $table->string('plataforma');
            $table->enum('tipo_cliente',['Seleccione...','interno','externo', 'ambos','N/D'])->default('Seleccione...');
            $table->enum('criticidad',['Seleccione...','baja','media','alta'])->default('Seleccione...');
            $table->enum('edo_aplic',['Seleccione...','operativo','no operativo'])->default('Seleccione...');
            $table->string('maquina');
            $table->enum('amb_calidad',['Seleccione...','si','no'])->default('Seleccione...');
            $table->enum('fuente',['Seleccione...','si','no'])->default('Seleccione...');
            $table->string('observaciones');
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
