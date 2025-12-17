<?php

namespace Database\Seeders\General;

use App\Enums\Generals\GetMethods;
use App\Models\General\GetMethod;
use Illuminate\Database\Seeder;

class GetMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (GetMethods::cases() as $enum) {
            GetMethod::updateOrCreate(
                ['get_method' => $enum->value],
                ['get_method' => $enum->value]
            );
        }
    }
}
