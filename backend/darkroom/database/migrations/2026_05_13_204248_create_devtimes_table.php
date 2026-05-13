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
            $table->foreign('Dilution')->references('DilutionID')->on('dilutions')
            ->constrained('dilutions')
                    ->cascadeOnDelete();
            $table->int('agitDuration');
            $table->int('agitInterval');
             $table->foreign('ISO')->references('ExpID')->on('exposurees')
            ->constrained('exposurees')
                    ->cascadeOnDelete();
            $table->integer('minutes')
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
