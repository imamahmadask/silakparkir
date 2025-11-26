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
        Schema::create('korlaps', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nik', 20);           
            $table->string('no_hp', 15)->nullable();
            $table->string('alamat', 100)->nullable();            
            $table->string('foto')->nullable();            
            $table->string('status', 100)->nullable();            
            $table->string('keterangan')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('korlaps');
    }
};
