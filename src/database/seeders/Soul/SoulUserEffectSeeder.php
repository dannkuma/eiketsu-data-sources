<?php

namespace Database\Seeders\Soul;

use App\Models\Soul\SoulEffect;
use App\Models\Soul\SoulUser;
use App\Models\Soul\SoulUserEffect;
use Illuminate\Database\Seeder;

class SoulUserEffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soulUser = SoulUser::first();
        $soulEffect = SoulEffect::first();
        SoulUserEffect::updateOrCreate(
            [
                'soul_user_id' => $soulUser->id,
                'soul_effect_id' => $soulEffect->id,
            ],
            [
                'is_effect_fixed' => false,
            ]
        );
    }
}
