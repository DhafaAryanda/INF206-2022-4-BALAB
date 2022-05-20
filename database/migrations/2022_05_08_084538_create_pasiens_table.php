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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('namaAwal')->nullable();
            $table->string('namaAkhir')->nullable();
            $table->string('statusPelayanan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('noHP')->nullable();
            $table->string('tglLahir')->nullable();
            $table->string('uploadGambar')->nullable();
            $table->foreignId('user_id');
            $table->string('nama');
            $table->string('tanggal_periksa');
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
        Schema::dropIfExists('pasiens');
    }
};
