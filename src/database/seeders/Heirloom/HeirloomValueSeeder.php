<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomValues;
use App\Models\Heirloom\HeirloomValue;
use Illuminate\Database\Seeder;

class HeirloomValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomValues::cases() as $enum) {
            HeirloomValue::updateOrCreate(
                ['heirloom_value' => $enum->value],
                ['heirloom_value' => $enum->value]
            );
        }
    }
}
