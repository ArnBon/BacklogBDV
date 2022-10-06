<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipo_id');
            $table->string('marca'); 
            $table->string('modelo'); 
            $table->string('ip_maquina'); 
            $table->string('procesador'); 
            $table->string('so'); 
            $table->string('serial'); 
            $table->string('arquitectura'); 
            $table->ENUM('acceso_int', ['Seleccione...','Si', 'No'])->default('Seleccione...'); 
            $table->ENUM('equipo_guardia', ['Seleccione...','Si', 'No'])->default('Seleccione...'); 
            $table->string('asignado_por'); 
            $table->ENUM('tipo_vpn_asig', ['Seleccione...','32','64'])->default('Seleccione...'); 
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('bl_equipos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bl_caracteristicas');
    }
}
