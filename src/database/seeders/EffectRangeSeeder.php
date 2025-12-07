<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\General\EffectRange;
use App\Enums\Generals\EffectRanges;

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
