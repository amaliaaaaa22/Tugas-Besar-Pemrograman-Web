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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('perjalananflights_id')->constrained()->casecadeOnDelete();
            $table->foreignId('flight_classes_id')->constrained()->casecadeOnDelete();
            $table->string('nama');
            $table->string('email');
            $table->string('no_telepon');
            $table->integer('no_passengers');
            $table->enum('status_pembayaran', ['pending', 'paid', 'failed'])->default('pending');
            $table->integer('subtotal')->nullable();
            $table->integer('grandtotal')->nullable();
            $table->SoftDeletes(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
