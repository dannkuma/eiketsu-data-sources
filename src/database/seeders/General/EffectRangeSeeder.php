<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\EffectRange;
use App\Enums\Generals\EffectRanges;
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
                ['path' => Str::random(20)]
            );
        }
    }
}
