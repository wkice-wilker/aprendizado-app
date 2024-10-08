<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::insert([
            ['url' => 'https://example.com/img1.jpg', 'reference_table' => 'book', 'reference_id' => 1],
            ['url' => 'https://example.com/img2.jpg', 'reference_table' => 'book', 'reference_id' => 2],
        ]);
    }
}
