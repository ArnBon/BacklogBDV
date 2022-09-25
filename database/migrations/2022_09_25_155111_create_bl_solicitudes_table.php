<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_solicitudes', function (Blueprint $table) {
            $table->id();
            $table->varchar('tipo_solicitud');
            $table->varchar('cod_solicitud');
            $table->varchar('solicitante');
            $table->varchar('area_solicitante');
            $table->date('fec_solicitud');
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
        Schema::dropIfExists('bl_solicitudes');
    }
}
