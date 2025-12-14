<?php

namespace Database\Seeders\Soul;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Soul\SoulValue;
use App\Enums\Souls\SoulValues;

class SoulValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SoulValues::cases() as $enum) {
            SoulValue::updateOrCreate(
                ['soul_value' => $enum->value]
            );
        }
    }
}
