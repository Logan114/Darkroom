<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class developerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('developers')->insert([
            'DevID' => 1,
            'Brand' => 'Adox',
            'name' => 'Rodinal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
