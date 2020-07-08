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
            $table->string('nama_depan');
            $table->string('nama_belakang')->nullable();
            $table->text('alamat');
            $table->string('agama');
            $table->text('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('akte')->nullable();;
            $table->string('kk')->nullable();;
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
        Schema::dropIfExists('siswas');
    }
}
