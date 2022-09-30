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
            $table->enum('personal_critico', ['Seleccione...','si','no'])->default('Seleccione...');
            $table->unsignedBigInteger('cargo_id');
            $table->unsignedBigInteger('ubicacion_id');
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();

            $table->foreign('cargo_id')->references('id')->on('bl_cargos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('persona_id')->references('id')->on('bl_personas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('ubicacion_id')->references('id')->on('bl_ubicaciones')
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
        Schema::dropIfExists('bl_empleados');
    }
}
