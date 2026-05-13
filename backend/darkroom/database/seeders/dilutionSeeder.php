<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dilution;
class dilutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        dilution::create([
        'DilutionID'=>1
        'Developer'=>1
        'dilution'=>'1+25'
        ]);
        dilution::create([
        'DilutionID'=>2
        'Developer'=>1
        'dilution'=>'1+50'
        ]);
        dilution::create([
        'DilutionID'=>3
        'Developer'=>1
        'dilution'=>'1+100'
        ]);
    
    }
}
