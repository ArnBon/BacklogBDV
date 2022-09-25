<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_direcciones', function (Blueprint $table) {
            $table->id();
            $table->varchar('descripcion');
            $table->varchar('avenida');
            $table->varchar('calle');
            $table->varchar('punto_ref');
            $table->int('ciudad_id');
            $table->int('estado_id');
            $table->int('parroquia_id');
            $table->int('municipio_id');
            $table->timestamps();

            $table->foreign('ciudad_id')->references('id')->ON('bl_ciudades')
                  ->onUpdate ('cascade')
                  ->onDelete ('cascade');

            $table->foreign('estado_id')->references('id')->ON('bl_estados')
                  ->onUpdate ('cascade')
                  ->onDelete ('cascade');

            $table->foreign('parroquia_id')->references('id')->ON('bl_parroquias')
                  ->onUpdate ('cascade')
                  ->onDelete ('cascade');

            $table->foreign('municipio_id')->references('id')->ON('bl_municipios')
                  ->onUpdate ('cascade')
                  ->onDelete ('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bl_direcciones');
    }
}
