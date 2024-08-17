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
        Schema::create('surat_izin', function (Blueprint $table) {
            $table->id('id_surat_izin');
            $table->foreignId('id_mhs')->constrained('mhs', 'id_mhs');
            $table->foreignId('id_matkul')->constrained('mata_kuliah', 'id_matkul');
            $table->timestamp('tanggal_pengajuan');
            $table->text('alasan_izin');
            $table->string('file_surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_izin');
    }
};
