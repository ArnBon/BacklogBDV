<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_familiares', function (Blueprint $table) {
            $table->id();
            $table->string('parentesco');
            $table->string('grupo_sanguineo');
            $table->string('discapacidad');
            $table->string('patologia');
            $table->string('medicamento_especial');
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
        Schema::dropIfExists('bl_familiares');
    }
}
