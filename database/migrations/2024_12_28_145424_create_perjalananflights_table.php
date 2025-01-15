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
        Schema::create('perjalananflights', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('no_penerbangan')->comment('Nomor penerbangan'); // Kolom nomor penerbangan
            $table->foreignId('pesawat_id') // Foreign key
                  ->constrained('pesawats') // Nama tabel yang dirujuk
                  ->cascadeOnDelete(); // Hapus data relasi jika pesawat dihapus
            $table->softDeletes(); // Untuk penghapusan logis
            $table->timestamps(); // Created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perjalananflights');
    }
};
