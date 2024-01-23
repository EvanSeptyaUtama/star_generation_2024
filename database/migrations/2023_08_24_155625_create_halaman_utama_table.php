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
        Schema::create('halaman_utamas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_yayasan');
            $table->string('nama_instansi');
            $table->text('penjelasan');
            $table->string('deskripsi_gambar1');
            $table->string('deskripsi_gambar2');
            $table->string('deskripsi_gambar3');
            $table->string('gambar_pertama');
            $table->string('gambar_kedua');
            $table->string('gambar_ketiga');
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
        Schema::dropIfExists('halaman_utama');
    }
};
