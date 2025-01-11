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
        Schema::create('transaction_passengers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')->constrained()->casecadeOnDelete();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('negara');
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_passengers');
    }
};