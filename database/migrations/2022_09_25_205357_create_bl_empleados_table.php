<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_empleados', function (Blueprint $table) {
            $table->id();
            $table->varchar('nm_ct');
            $table->date('fec_ing');
            $table->date('fec_ing_dpto');
            $table->varchar('ant_dpto');
            $table->varchar('ant_bco');
            $table->varchar('email');
            $table->varchar('email_alterno');
            $table->enum('personal_critico', ['si','no']);
            $table->int('cargo_id');
            $table->int('ubicacion_id');
            $table->int('persona_id');
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
        Schema::dropIfExists('bl_empleados');
    }
}
