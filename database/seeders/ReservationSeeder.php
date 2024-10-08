<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::insert([
            ['user_id' => 4, 'book_id' => 1, 'reserved_at' => now(), 'status' => 'reserved'],
            ['user_id' => 4, 'book_id' => 2, 'reserved_at' => now(), 'status' => 'cancelled'],
        ]);
    }
}
