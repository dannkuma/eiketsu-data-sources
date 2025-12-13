<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\HeirloomSoulClassification;
use App\Enums\Heirlooms\HeirloomSoulClassifications;

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
