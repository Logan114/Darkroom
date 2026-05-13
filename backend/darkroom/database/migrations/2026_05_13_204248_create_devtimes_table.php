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
        Schema::create('devtimes', function (Blueprint $table) {
            $table->id('DevTimeID');
            $table->foreignId('Dilution')->constrained('dilutions', 'DilutionID')->cascadeOnDelete();
            $table->integer('agitDuration');
            $table->integer('agitInterval');
            $table->integer('ISO');
            $table->integer('minutes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devtimes');
    }
};
