<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class devtimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('devtimes')->insert([
            'DevTimeID' => 1,
            'Dilution' => 1,
            'agitDuration' => 10,
            'agitInterval' => 60,
            'ISO' => 1,
            'minutes' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
