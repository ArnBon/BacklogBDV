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
            $table->string('tipo_solicitud');
            $table->string('cod_solicitud');
            $table->string('solicitante');
            $table->string('area_solicitante');
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
