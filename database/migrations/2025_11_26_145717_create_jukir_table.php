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
        Schema::create('jukirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nik', 20);
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tgl_lahir', 100)->nullable();
            $table->string('agama', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('kel_alamat', 100)->nullable();
            $table->string('kec_alamat', 100)->nullable();
            $table->string('kab_alamat', 100)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->string('kode', 10)->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('foto')->nullable();
            $table->string('dokumen')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('status', 100);
            $table->date('tgl_terdaftar');
            $table->date('tgl_perjanjian')->nullable();
            $table->string('no_perjanjian')->nullable();
            $table->boolean('is_aktif')->default(false);
            $table->boolean('is_nonaktif')->default(false);
            $table->boolean('is_tunai')->default(false);
            $table->boolean('is_non_tunai')->default(false);
            $table->date('tgl_awal_tap')->nullable();
            $table->date('tgl_nonaktif')->nullable();
            $table->integer('titik_id');            
            $table->integer('merchant_id');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jukirs');
    }
};
