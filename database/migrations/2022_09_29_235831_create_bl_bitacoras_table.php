<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_bitacoras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('solicitud_id');
            $table->unsignedBigInteger('empleado_id');
            $table->string('aplicativo');
            $table->enum('normativo',['Seleccione...','SI','NO'])->default('Seleccione...');
            $table->enum('prioridad',['Seleccione...','baja', 'media', 'alta'])->default('Seleccione...');
            $table->string('detalle_corto');
            $table->string('detalle_seguimiento');
            $table->string('esp_responsable');
            $table->string('porc_avance');
            $table->string('observaciones');
            $table->date('fec_inicio');
            $table->date('fec_cierre');
            $table->date('fec_suspension');
            $table->date('fec_fincalidad');
            $table->date('fec_finproduccion');
            $table->string('num_ctrol_com_calidad');
            $table->string('num_ctrol_com_produccion');
            $table->enum('estado',['Seleccione...','asignado','cerrado','en certificacion','en desarrollo','en produccion','por iniciar','suspendido'])->default('Seleccione...');
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
        Schema::dropIfExists('bl_bitacoras');
    }
}
