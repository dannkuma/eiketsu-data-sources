<?php

namespace Database\Seeders\Soul;

use App\Models\Soul\Soul;
use App\Models\Soul\SoulEffect;
use Illuminate\Database\Seeder;

class SoulInitialEffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soul = Soul::first();
        $soulEffect = SoulEffect::first();
        if ($soul && $soulEffect) {
            $soul->soulInitialEffects()->syncWithoutDetaching($soulEffect->id);
        }
    }
}
