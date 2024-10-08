<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::insert([
            ['name' => 'J.K. Rowling'],
            ['name' => 'George Orwell'],
            ['name' => 'J.R.R. Tolkien'],
            ['name' => 'Mark Twain'],
        ]);
    }
}
