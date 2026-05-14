<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\exposures;
class exposureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        exposures::create([
          'expID'=>1,
        'StockID'=>4,
        'ISO'=>320,
        'push'=>'-0.3'  
        ]);
       

    }
}
