<?php

namespace Database\Seeders\Soul;

use App\Models\Soul\Soul;
use App\Models\Soul\SoulUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class SoulUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soul = Soul::first();
        $user = User::first();
        SoulUser::updateOrCreate(
            [
                'soul_id' => $soul->id,
                'user_id' => $user->id,
            ],
            [
                'is_locked' => false,
            ]
        );
    }
}
