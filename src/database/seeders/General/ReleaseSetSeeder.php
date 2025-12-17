<?php

namespace Database\Seeders\General;

use App\Enums\Generals\ReleaseSets;
use App\Models\General\ReleaseSet;
use Illuminate\Database\Seeder;

class ReleaseSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ReleaseSets::cases() as $enum) {
            ReleaseSet::updateOrCreate(
                ['release_set' => $enum->value],
                ['release_set' => $enum->value]
            );
        }
    }
}
