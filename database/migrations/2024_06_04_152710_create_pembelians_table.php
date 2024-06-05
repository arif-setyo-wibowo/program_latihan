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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idatlet');
            $table->unsignedBigInteger('idlangganan');
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->string('status_langganan',2);
            $table->timestamps();

            $table->foreign('idatlet')->references('id')->on('atlets')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idlangganan')->references('id')->on('langganans')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
};
