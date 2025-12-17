<?php

namespace Database\Seeders\General;

use App\Models\General\General;
use App\Models\General\GeneralGetMethod;
use App\Models\General\GeneralProvidedEnd;
use App\Models\General\GeneralProvidedStart;
use App\Models\General\GetMethod;
use Illuminate\Database\Seeder;

class GeneralGetMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generalId = General::where('name', '織田信長')->value('id');
        $getMethodId = GetMethod::where('get_method', 'obtain-general')->value('id');
        $providedStartId = GeneralProvidedStart::first()->id;
        $providedEndId = GeneralProvidedEnd::first()->id;

        GeneralGetMethod::updateOrCreate(
            [
                'general_id' => $generalId,
                'get_method_id' => $getMethodId,
                'general_provided_start_id' => $providedStartId,
                'general_provided_end_id' => $providedEndId,
            ],
            [
                'general_id' => $generalId,
                'get_method_id' => $getMethodId,
                'general_provided_start_id' => $providedStartId,
                'general_provided_end_id' => $providedEndId,
            ]
        );
    }
}
