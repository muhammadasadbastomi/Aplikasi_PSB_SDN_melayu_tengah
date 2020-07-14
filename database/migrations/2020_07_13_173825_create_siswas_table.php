<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wali_id')->nullable();
            $table->unsignedBigInteger('ayah_id')->nullable();
            $table->unsignedBigInteger('ibu_id')->nullable();
            $table->text('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->text('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jenis_kelamin', ['1', '2'])->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('jumlah_saudara')->nullable();
            $table->string('akte')->nullable();
            $table->string('kk')->nullable();
            $table->unsignedBigInteger('pembayaran_id')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('wali_id')->references('id')->on('walis')->onDelete('cascade');
            $table->foreign('ayah_id')->references('id')->on('ayahs')->onDelete('cascade');
            $table->foreign('ibu_id')->references('id')->on('ibus')->onDelete('cascade');
            $table->foreign('pembayaran_id')->references('id')->on('pembayarans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
