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
        Schema::create('dilutions', function (Blueprint $table) {
            $table->id('DilutionID');
            $table->foreign('Developer')->references('DevID')->on('developers')
            ->constrained('developers')
                    ->cascadeOnDelete();
            $table->string('dilution');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dilutions');
    }
};
