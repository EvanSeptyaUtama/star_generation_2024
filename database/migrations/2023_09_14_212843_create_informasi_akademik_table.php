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
        Schema::create('informasi_akademik', function (Blueprint $table) {
            $table->id();
            $table->string('hari_informasi_akademik');
            $table->date('tanggal_informasi_akademik');
            $table->string('informasi_informasi_akademik');
            $table->longText('keterangan_informasi_akademik');
            $table->string('gambar_informasi_akademik');
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
        Schema::dropIfExists('informasi_akademik');
    }
};
