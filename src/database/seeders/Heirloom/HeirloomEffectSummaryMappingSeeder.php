<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomEffectDetail;
use App\Models\Heirloom\HeirloomEffectSummary;
use App\Models\Heirloom\HeirloomEffectSummaryMapping;
use App\Models\Heirloom\Level;
use Illuminate\Database\Seeder;

class HeirloomEffectSummaryMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloomEffectSummary = HeirloomEffectSummary::first();
        $heirloomEffectDetail = HeirloomEffectDetail::first();
        $level = Level::first();
        HeirloomEffectSummaryMapping::updateOrCreate(
            [
                'heirloom_effect_summary_id' => $heirloomEffectSummary->id,
                'heirloom_effect_detail_id' => $heirloomEffectDetail->id,
                'level_id' => $level->id,
            ],
            [
                'heirloom_effect_summary_id' => $heirloomEffectSummary->id,
                'heirloom_effect_detail_id' => $heirloomEffectDetail->id,
                'level_id' => $level->id,
            ]
        );
    }
}
