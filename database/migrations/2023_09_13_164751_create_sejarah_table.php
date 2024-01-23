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
        Schema::create('sejarah', function (Blueprint $table) {
            $table->id();
            $table->string('judul_sejarah');
            $table->text('penjelasan_singkat');
            $table->longText('penjelasan_lengkap');
            $table->string('gambar_sejarah');
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
        Schema::dropIfExists('sejarah');
    }
};
