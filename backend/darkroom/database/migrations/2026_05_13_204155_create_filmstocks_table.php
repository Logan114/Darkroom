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
        Schema::create('filmstocks', function (Blueprint $table) {
            $table->id('stockID');
            $table->string('manufacturer');
            $table->string('StockName');
            $table->string('Format');
            $table->integer('BoxISO');
            $table->enum('format',
            ['35mm/135',
            '120',
            '4x5',
            '8x10']);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmstocks');
    }
};
