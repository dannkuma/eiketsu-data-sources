<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomEffect;
use App\Models\Heirloom\HeirloomEffectDetail;
use App\Models\Heirloom\HeirloomEnhancementType;
use Illuminate\Database\Seeder;

class HeirloomEffectDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloomEffect = HeirloomEffect::first();
        $heirloomEnhancementType = HeirloomEnhancementType::first();
        HeirloomEffectDetail::updateOrCreate(
            [
                'heirloom_effect_id' => $heirloomEffect->id,
                'heirloom_enhancement_type_id' => $heirloomEnhancementType->id,
            ],
            []
        );
    }
}
