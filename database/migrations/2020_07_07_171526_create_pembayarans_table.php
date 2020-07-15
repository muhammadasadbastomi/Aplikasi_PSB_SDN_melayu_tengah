<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->length(36);
            $table->string('metode');
            $table->date('tgl_bayar')->nullable();
            $table->unsignedBigInteger('cicilan_id')->nullable();
            $table->string('status')->nullable();
            $table->string('nominal')->nullable();
            $table->string('terbilang')->nullable();
            $table->string('bukti')->nullable();
            $table->timestamps();
            $table->foreign('cicilan_id')->references('id')->on('cicilans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
}
