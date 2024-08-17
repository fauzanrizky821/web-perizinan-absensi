<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id('id_matkul');
            $table->string('kode_matkul')->unique();
            $table->string('nama_matkul');
            $table->foreignId('id_dosen')->constrained('dosen', 'id_dosen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
