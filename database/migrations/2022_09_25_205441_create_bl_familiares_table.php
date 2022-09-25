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
            $table->varchar('parentesco');
            $table->varchar('grupo_sanguineo');
            $table->varchar('discapacidad');
            $table->varchar('patologia');
            $table->varchar('medicamento_especial');
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
