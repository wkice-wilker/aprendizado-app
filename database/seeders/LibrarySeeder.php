<?php

namespace Database\Seeders;

use App\Models\Library;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Library::insert([
            ['name' => 'Central Library', 'address' => '123 Main St', 'city_id' => 1],
            ['name' => 'Municipal Library', 'address' => '456 High St', 'city_id' => 2],
            ['name' => 'NY Public Library', 'address' => '789 Park Ave', 'city_id' => 3],
            ['name' => 'LA Library', 'address' => '101 Ocean Blvd', 'city_id' => 4],
        ]);
    }
}
