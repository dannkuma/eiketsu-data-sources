<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Generals\GetMethods;
use App\Models\General\GetMethod;

class GetMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (GetMethods::cases() as $enum) {
            GetMethod::updateOrCreate(
                ['get_method' => $enum->value]
            );
        }
    }
}
