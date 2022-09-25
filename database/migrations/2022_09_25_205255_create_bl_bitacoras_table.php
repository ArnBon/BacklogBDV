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
            $table->varchar('aplicativo');
            $table->enum('normativo',['SI','NO']);
            $table->enum('baja', 'media', 'alta');
            $table->varchar('detalle_corto');
            $table->varchar('detalle_seguimiento');
            $table->varchar('esp_responsable');
            $table->varchar('porc_avance');
            $table->varchar('observaciones');
            $table->date('fec_inicio');
            $table->date('fec_cierre');
            $table->date('fec_suspension');
            $table->date('fec_fincalidad');
            $table->date('fec_finproduccion');
            $table->varchar('num_ctrol_com_calidad');
            $table->varchar('num_ctrol_com_produccion');
            $table->enum('estado',['asignado','cerrado','en certificacion','en desarrollo','en produccion','por iniciar','suspendido']);

            
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
        Schema::dropIfExists('bl_bitacoras');
    }
}
