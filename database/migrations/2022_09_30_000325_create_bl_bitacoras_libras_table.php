<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlBitacorasLibrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bl_bitacoras_libras', function (Blueprint $table) {
            $table->id();$table->unsignedBigInteger('bitacora_id');
            $table->unsignedBigInteger('libra_id');
            $table->timestamps();

            $table->foreign('bitacora_id')->references('id')->on('bl_bitacoras')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('libra_id')->references('id')->on('bl_libras')
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
        Schema::dropIfExists('bl_bitacoras_libras');
    }
}
