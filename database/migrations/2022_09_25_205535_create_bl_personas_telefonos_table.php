<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlPersonasTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_personas_telefonos', function (Blueprint $table) {
            $table->id();
             $table->integer('persona_id');
            $table->integer('telefono_id');
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('bl_personas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('telefono_id')->references('id')->on('bl_telefonos')
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
        Schema::dropIfExists('bl_personas_telefonos');
    }
}
