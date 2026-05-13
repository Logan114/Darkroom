<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
usee App\Models\developer;
class developerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    developer::create([
        'DevID'=>1,
        'Brand' => 'Adox',
        'name' => 'Rodinal',
        ]);
    }
}
