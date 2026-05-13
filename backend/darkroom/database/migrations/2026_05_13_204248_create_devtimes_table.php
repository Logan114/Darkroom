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
            $table->foreign('DevDilution')->references('Dilution')->on('dilutions')
            ->constrained('dilutions')
                    ->cascadeOnDelete();
            $table->int('agitDuration');
            $table->int('agitInterval');
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
