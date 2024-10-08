<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            LibrarySeeder::class,
            UserRoleSeeder::class,
            UserAccountSeeder::class,
            AuthorSeeder::class,
            PublisherSeeder::class,
            WorkSeeder::class,
            BookSeeder::class,
            UserSessionSeeder::class,
            ImageSeeder::class,
            ReservationSeeder::class,
            LoanSeeder::class,
        ]);
    }
}
