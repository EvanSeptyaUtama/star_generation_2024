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
        Schema::create('utama_ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('judul_ppdb');
            $table->string('gambar_brosur_ppdb');
            $table->text('penjelasan_ppdb');
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
        Schema::dropIfExists('utama_ppdb');
    }
};
