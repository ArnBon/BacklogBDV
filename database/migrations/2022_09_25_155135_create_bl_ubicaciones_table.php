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
            $table->varchar('cod_unidad');
            $table->varchar('gerencia');
            $table->varchar('vp');
            $table->varchar('tipo');
            $table->varchar('nivel');
            $table->varchar('grupo');
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
