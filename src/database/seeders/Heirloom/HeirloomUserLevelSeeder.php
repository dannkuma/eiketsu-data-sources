<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\Heirloom;
use App\Models\Heirloom\HeirloomUserLevel;
use App\Models\Heirloom\Level;
use App\Models\Soul\SoulUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class HeirloomUserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloom = Heirloom::first();
        $user = User::first();
        $level = Level::first();
        $soulUser = SoulUser::first();
        if ($heirloom && $user && $level && $soulUser) {
            HeirloomUserLevel::updateOrCreate(
                [
                    'heirloom_id' => $heirloom->id,
                    'user_id' => $user->id,
                    'level_id' => $level->id,
                    'soul_user_id' => $soulUser->id,
                ],
                [
                    'lock' => false,
                    'submission_status' => false,
                ]
            );
        }
    }
}
