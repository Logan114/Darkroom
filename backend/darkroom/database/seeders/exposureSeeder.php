<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class exposureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exposures')->insert([
            'expID' => 1,
            'StockID' => 4,
            'ISO' => 200,
            'push' => '-0.3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
