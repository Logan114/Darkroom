<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmstockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmstocks')->insert([
            'stockID' => 1,
            'manufacturer' => 'Foma', //Fomapan my beloved 
            'stock_name' => 'Fomapan 200',
            'box_iso' => 200,
            'format' => '35mm/135',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('filmstocks')->insert([
            'stockID' => 2,
            'manufacturer' => 'Agfa',
            'stock_name' => 'APX 400',
            'box_iso' => 400,
            'format' => '35mm/135',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('filmstocks')->insert([
            'stockID' => 3,
            'manufacturer' => 'Ilford',
            'stock_name' => 'Kentmere pan 400',
            'box_iso' => 400,
            'format' => '35mm/135',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('filmstocks')->insert([
            'stockID' => 4,
            'manufacturer' => 'Foma', //Fomapan my beloved 
            'stock_name' => 'Fomapan 400',
            'box_iso' => 400,
            'format' => '35mm/135',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
