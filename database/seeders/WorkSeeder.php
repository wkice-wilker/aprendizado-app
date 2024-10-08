<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Work::insert([
            ['title' => 'Harry Potter and the Philosopher\'s Stone', 'author_id' => 1, 'publisher_id' => 1],
            ['title' => '1984', 'author_id' => 2, 'publisher_id' => 2],
            ['title' => 'The Hobbit', 'author_id' => 3, 'publisher_id' => 3],
            ['title' => 'The Adventures of Tom Sawyer', 'author_id' => 4, 'publisher_id' => 4],
        ]);
    }
}
