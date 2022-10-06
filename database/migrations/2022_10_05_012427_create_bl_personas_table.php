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
            $table->unsignedBigInteger('genero_id');
            $table->string('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fec_nac');
            $table->integer('edad');
            $table->timestamps();

            $table->foreign('genero_id')->references('id')->on('bl_generos')
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
