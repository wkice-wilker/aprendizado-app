<?php

namespace Database\Seeders;

use App\Models\UserSession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserSession::insert([
            ['user_id' => 1, 'session_token' => 'session123token', 'expires_at' => now()->addHours(1)],
            ['user_id' => 4, 'session_token' => 'session456token', 'expires_at' => now()->addHours(1)],
        ]);
    }
}
