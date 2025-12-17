<?php

namespace Database\Seeders\General;

use App\Enums\Generals\EffectRanges;
use App\Models\General\EffectRange;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EffectRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (EffectRanges::cases() as $enum) {
            EffectRange::updateOrCreate(
                ['effect_range' => $enum->value],
                [
                    'effect_range' => $enum->value,
                    'path' => Str::random(20),
                ]
            );
        }
    }
}
