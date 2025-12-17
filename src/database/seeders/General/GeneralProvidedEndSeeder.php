<?php

namespace Database\Seeders\General;

use App\Models\General\GeneralProvidedEnd;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GeneralProvidedEndSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralProvidedEnd::updateOrCreate(
            ['general_provided_end' => Carbon::parse('2025-12-15')],
            ['general_provided_end' => Carbon::parse('2025-12-15')]
        );
    }
}
