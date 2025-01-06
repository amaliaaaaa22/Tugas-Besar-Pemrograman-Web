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
        Schema::create('flight_segmenets', function (Blueprint $table) {
            $table->id();
            $table->integer('sequence');
            $table->foreignId('pesawat_id')->constrained()->cascadeOnDelete();
            $table->foreignId('penerbangan_id')->constrained()->cascadeOnDelete();
            $table->dateTime('time');
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_segmenets');
    }
};
