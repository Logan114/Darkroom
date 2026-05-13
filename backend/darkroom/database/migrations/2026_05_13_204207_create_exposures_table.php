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
        Schema::create('exposures', function (Blueprint $table) {
            $table->id('expID');
            $table->foreign('StockID')->references('stockID')->on('filmstocks')
            ->constrained('filmstocks')
                    ->cascadeOnDelete();
            $table->integer('ISO');
            $table->string('push')->default(0)
            $table->
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exposures');
    }
};
