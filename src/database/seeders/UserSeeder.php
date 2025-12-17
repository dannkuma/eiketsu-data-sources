<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'name' => 'テストユーザー',
            'email' => 'test@example.com',
        ],
            [
                'name' => 'テストユーザー',
                'email' => 'test@example.com',
                'password' => bcrypt('password123'),
            ]);
    }
}
