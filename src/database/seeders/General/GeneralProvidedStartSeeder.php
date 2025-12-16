<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\GeneralProvidedStart;
use Illuminate\Support\Carbon;

class GeneralProvidedStartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralProvidedStart::create(['general_provided_start' => Carbon::parse('2024-12-15')]);
    }
}
