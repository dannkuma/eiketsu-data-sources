<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\General;
use App\Models\General\GeneralGetMethod;
use App\Models\General\GetMethod;
use App\Models\General\GeneralProvidedStart;
use App\Models\General\GeneralProvidedEnd;

class GeneralGetMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralGetMethod::create([
            'general_id' => General::where('name', '織田信長')->value('id'),
            'get_method_id' => GetMethod::where('get_method', 'obtain-general')->value('id'),
            'general_provided_start_id' => GeneralProvidedStart::first()->id,
            'general_provided_end_id' => GeneralProvidedEnd::first()->id,
        ]);
    }
}
