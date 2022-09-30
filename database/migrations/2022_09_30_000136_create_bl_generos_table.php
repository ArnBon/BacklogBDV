<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_generos', function (Blueprint $table) {
            $table->id();
            $table->enum('descripcion', ['Seleccione...','M','F'])->default('Seleccione...');
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('bl_personas')
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
        Schema::dropIfExists('bl_generos');
    }
}
