<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::insert([
            ['user_id' => 4, 'book_id' => 1, 'loaned_at' => now(), 'due_date' => now()->addDays(14)],
        ]);
    }
}
