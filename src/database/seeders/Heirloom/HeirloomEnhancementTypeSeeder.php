<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomEnhancementTypes;
use App\Models\Heirloom\HeirloomEnhancementType;
use Illuminate\Database\Seeder;

class HeirloomEnhancementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomEnhancementTypes::cases() as $type) {
            HeirloomEnhancementType::updateOrCreate(
                ['heirloom_enhancement_type' => $type],
                ['heirloom_enhancement_type' => $type]
            );
        }
    }
}
