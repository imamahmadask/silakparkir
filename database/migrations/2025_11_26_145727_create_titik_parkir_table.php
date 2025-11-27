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
        Schema::create('titiks', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('lokasi', 100);
            $table->string('gmaps');
            $table->string('koordinat');
            $table->string('sisi')->nullable();
            $table->string('panjang_luas')->nullable();
            $table->string('waktu_pelayanan')->nullable();
            $table->string('hari_buka')->nullable();
            $table->string('jenis')->nullable();
            $table->string('kategori')->nullable();
            $table->string('foto')->nullable();
            $table->string('status')->nullable();
            $table->date('tgl_terdaftar')->nullable();
            $table->date('tgl_nonaktif')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('korlap_id');
            $table->integer('kelurahan_id');
            $table->integer('kecamatan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titik');
    }
};
