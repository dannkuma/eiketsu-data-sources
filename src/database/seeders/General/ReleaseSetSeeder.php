<?php

namespace Database\Seeders\General;

use App\Enums\Generals\ReleaseSets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\General\ReleaseSet;

class ReleaseSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ReleaseSets::cases() as $enum) {
            ReleaseSet::updateOrCreate(
                ['release_set' => $enum->value]
            );
        }
    }
}
