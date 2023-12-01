<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penerima_bansos', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nik');
            $table->bigInteger('nomor_kk');
            $table->string('foto_ktp');
            $table->string('foto_kk');
            $table->unsignedInteger('umur');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('provinsi');
            $table->string('kab_kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('alamat', 255);
            $table->string('rt');
            $table->string('rw');
            $table->unsignedInteger('penghasilan_sebelum_pandemi');
            $table->unsignedInteger('penghasilan_setelah_pandemi');
            $table->string('alasan_bantuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima_bansos');
    }
};
