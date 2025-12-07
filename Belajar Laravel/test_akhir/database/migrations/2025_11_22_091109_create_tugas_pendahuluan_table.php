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
        Schema::create('tugas_pendahuluan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('subJudul');
            $table->string('kategori');
            $table->string('tanggalPost');
            $table->string('deadline');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas_pendahuluan');
    }
};
