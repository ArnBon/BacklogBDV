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
            $table->VARCHAR('marca'); 
            $table->VARCHAR('modelo'); 
            $table->VARCHAR('ip_maquina'); 
            $table->VARCHAR('procesador'); 
            $table->VARCHAR('so'); 
            $table->VARCHAR('serial'); 
            $table->VARCHAR('arquitectura'); 
            $table->ENUM('acceso_int', ['SI', 'NO']); 
            $table->ENUM('equipo_guardia', ['SI', 'NO']); 
            $table->VARCHAR('asignado_por'); 
            $table->ENUM('tipo_vpn_asig', ['32','64']); 
            $table->ENUM('bl_equipos_id', ['32','64']);
            $table->int('equipo_id'); 
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
        Schema::dropIfExists('bl_caracteristicas');
    }
}
