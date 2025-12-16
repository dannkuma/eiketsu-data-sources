<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\GeneralProvidedEnd;
use Illuminate\Support\Carbon;

class GeneralProvidedEndSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralProvidedEnd::create(['general_provided_end' => Carbon::parse('2025-12-15')]);
    }
}
