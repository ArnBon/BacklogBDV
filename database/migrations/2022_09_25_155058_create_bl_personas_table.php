<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_personas', function (Blueprint $table) {
            $table->id();
            $table->string('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fec_nac');
            $table->integer('edad');
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('bl_personas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('direccion_id')->references('id')->on('bl_direcciones')
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
        Schema::dropIfExists('bl_personas');
    }
}
