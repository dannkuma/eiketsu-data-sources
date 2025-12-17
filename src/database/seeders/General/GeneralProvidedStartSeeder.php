<?php

namespace Database\Seeders\General;

use App\Models\General\GeneralProvidedStart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GeneralProvidedStartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralProvidedStart::updateOrCreate(
            ['general_provided_start' => Carbon::parse('2024-12-15')],
            ['general_provided_start' => Carbon::parse('2024-12-15')]
        );
    }
}
