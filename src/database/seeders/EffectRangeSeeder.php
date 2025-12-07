<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EffectRange;
use App\Enums\EffectRanges;

class EffectRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (EffectRanges::cases() as $enum) {
            EffectRange::updateOrCreate(
                ['effect_range' => $enum->value]
            );
        }
    }
}
