<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\devtimes;
class devtimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        dilution::create([
        'DevTimeID'=>1,
        'Dilution'=>1,
        'agitDuration'=>10,
        'agitInterval'=>60,
        'ISO'=>1
        'minutes'=>10,
        'ISO'=>1
        ]);



    }
}
