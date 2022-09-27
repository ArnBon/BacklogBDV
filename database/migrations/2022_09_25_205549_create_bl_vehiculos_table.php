<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('marca');
            $table->string('color');
            $table->string('placa');
            $table->string('annio');
            $table->string('serial_m');
            $table->string('serial c');
            $table->integer('empleado_id');
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
        Schema::dropIfExists('bl_vehiculos');
    }
}
