<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::insert([
            ['role_name' => 'Admin'],
            ['role_name' => 'Librarian'],
            ['role_name' => 'Member'],
        ]);
    }
}
