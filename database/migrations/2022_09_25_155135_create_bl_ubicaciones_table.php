<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_ubicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('cod_unidad');
            $table->string('gerencia');
            $table->string('vp');
            $table->string('tipo');
            $table->string('nivel');
            $table->string('grupo');
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
        Schema::dropIfExists('bl_ubicaciones');
    }
}
