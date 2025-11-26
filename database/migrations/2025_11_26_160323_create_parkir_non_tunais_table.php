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
        Schema::create('parkir_non_tunais', function (Blueprint $table) {
            $table->id();
            $table->string('trx_id')->unique();
            $table->integer('merchant_id');
            $table->datetime('tgl_transaksi');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->string('issuer_name', 50)->nullable();
            $table->string('sender_name', 50)->nullable();
            $table->integer('jumlah');
            $table->string('status', 50);
            $table->string('file_name', 50)->nullable();
            $table->string('settlement', 50)->nullable();
            $table->integer('kecamatan_id');
            $table->timestamps();

            $table->index(['merchant_id', 'tgl_transaksi']);
            $table->index(['merchant_id', 'bulan', 'tahun']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parkir_non_tunais');
    }
};
