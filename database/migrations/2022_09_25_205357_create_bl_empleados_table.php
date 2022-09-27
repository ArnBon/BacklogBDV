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
            $table->string('nm_ct');
            $table->date('fec_ing');
            $table->date('fec_ing_dpto');
            $table->string('ant_dpto');
            $table->string('ant_bco');
            $table->string('email');
            $table->string('email_alterno');
            $table->enum('personal_critico', ['si','no']);
            $table->integer('cargo_id');
            $table->integer('ubicacion_id');
            $table->integer('persona_id');
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
