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
            $table->string('descripcion');
            $table->string('avenida');
            $table->string('calle');
            $table->string('punto_ref');
            $table->unsignedBigInteger('ciudad_id');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('parroquia_id');
            $table->unsignedBigInteger('municipio_id');
            $table->timestamps();

            $table->foreign('ciudad_id')->references('id')->on('bl_ciudades')
                  ->onUpdate ('cascade')
                  ->onDelete ('cascade');            

            $table->foreign('parroquia_id')->references('id')->on('bl_parroquias')
                  ->onUpdate ('cascade')
                  ->onDelete ('cascade');

            $table->foreign('municipio_id')->references('id')->on('bl_municipios')
                  ->onUpdate ('cascade')
                  ->onDelete ('cascade');

            $table->foreign('estado_id')->references('id')->on('bl_estados')
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
