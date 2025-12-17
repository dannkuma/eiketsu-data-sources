<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomSoulClassifications;
use App\Models\Heirloom\HeirloomSoulClassification;
use Illuminate\Database\Seeder;

class HeirloomSoulClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomSoulClassifications::cases() as $enum) {
            HeirloomSoulClassification::updateOrCreate(
                ['heirloom_soul_classification' => $enum->value]
            );
        }
    }
}
