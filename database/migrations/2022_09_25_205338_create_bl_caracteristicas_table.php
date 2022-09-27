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
            $table->string('marca'); 
            $table->string('modelo'); 
            $table->string('ip_maquina'); 
            $table->string('procesador'); 
            $table->string('so'); 
            $table->string('serial'); 
            $table->string('arquitectura'); 
            $table->ENUM('acceso_int', ['SI', 'NO']); 
            $table->ENUM('equipo_guardia', ['SI', 'NO']); 
            $table->string('asignado_por'); 
            $table->ENUM('tipo_vpn_asig', ['32','64']); 
            $table->ENUM('bl_equipos_id', ['32','64']);
            $table->integer('equipo_id'); 
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('bl_empleados')
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
