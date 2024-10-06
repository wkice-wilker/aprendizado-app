<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::insert([
            ['name' => 'São Paulo', 'state' => 'SP', 'country' => 'Brazil'],
            ['name' => 'Rio de Janeiro', 'state' => 'RJ', 'country' => 'Brazil'],
            ['name' => 'New York', 'state' => 'NY', 'country' => 'USA'],
            ['name' => 'Los Angeles', 'state' => 'CA', 'country' => 'USA'],
        ]);
    }
}
