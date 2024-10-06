<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            ['work_id' => 1, 'library_id' => 1, 'isbn' => '9780747532743', 'available' => true],
            ['work_id' => 2, 'library_id' => 2, 'isbn' => '9780451524935', 'available' => true],
            ['work_id' => 3, 'library_id' => 3, 'isbn' => '9780261103283', 'available' => true],
            ['work_id' => 4, 'library_id' => 4, 'isbn' => '9780142437179', 'available' => false],
        ]);
    }
}
