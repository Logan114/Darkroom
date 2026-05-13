<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dilutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dilutions')->insert([
            'DilutionID' => 1,
            'Developer' => 1,
            'dilution' => '1+25',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('dilutions')->insert([
            'DilutionID' => 2,
            'Developer' => 1,
            'dilution' => '1+50',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('dilutions')->insert([
            'DilutionID' => 3,
            'Developer' => 1,
            'dilution' => '1+100',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
