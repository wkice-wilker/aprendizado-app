<?php

namespace Database\Seeders;

use App\Models\UserAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserAccount::insert([
            ['username' => 'admin', 'password' => bcrypt('admin123'), 'email' => 'admin@example.com', 'role_id' => 1],
            ['username' => 'librarian1', 'password' => bcrypt('lib123'), 'email' => 'lib1@example.com', 'role_id' => 2],
            ['username' => 'librarian2', 'password' => bcrypt('lib123'), 'email' => 'lib2@example.com', 'role_id' => 2],
            ['username' => 'member1', 'password' => bcrypt('member123'), 'email' => 'member1@example.com', 'role_id' => 3],
        ]);
    }
}
