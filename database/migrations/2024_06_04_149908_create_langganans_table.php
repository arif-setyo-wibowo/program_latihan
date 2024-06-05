<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langganans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_langganan');
            $table->string('lama_langganan');
            $table->integer('harga');
            $table->string('keuntungan_1')->nullable();
            $table->string('keuntungan_2')->nullable();
            $table->string('keuntungan_3')->nullable();
            $table->string('keuntungan_4')->nullable();
            $table->string('keuntungan_5')->nullable();
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
        Schema::dropIfExists('langganans');
    }
};