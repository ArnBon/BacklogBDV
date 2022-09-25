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
            $table->varchar('cedula');
            $table->varchar('nombres');
            $table->varchar('apellidos');
            $table->date('fec_nac');
            $table->integer('edad');
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
        Schema::dropIfExists('bl_personas');
    }
}
