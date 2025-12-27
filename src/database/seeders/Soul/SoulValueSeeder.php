<?php

namespace Database\Seeders\Soul;

use App\Enums\Souls\SoulValues;
use App\Models\Soul\SoulValue;
use Illuminate\Database\Seeder;

class SoulValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SoulValues::cases() as $enum) {
            SoulValue::updateOrCreate(
                ['soul_value' => $enum->value],
                []
            );
        }
    }
}
