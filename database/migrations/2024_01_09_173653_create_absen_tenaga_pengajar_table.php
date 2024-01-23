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
        Schema::create('absen_tenaga_pengajar', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('keterangan');
            //Foreign key: Table Tenaga pengajar
            $table->unsignedBigInteger('tenaga_pengajar_id');
            $table->foreign('tenaga_pengajar_id')->references('id')->on('tenaga_pengajar')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('absen_tenaga_pengajar');
    }
};
