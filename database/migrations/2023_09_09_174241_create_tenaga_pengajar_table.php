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
        Schema::create('tenaga_pengajar', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama', 50);
            $table->string('foto')->nullable();
            $table->string('no_telp');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('ttl');
            $table->string('jabatan');
            $table->enum('agama', ['Islam', 'Katholik', 'Protestan', 'Hindu', 'Budha', 'Konghucu'])->nullable();
            $table->string('suku')->nullable();
            $table->string('rt_rw')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->timestamps();
            //Foreign : table kelas
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenaga_pengajar');
    }
};
