<?php

namespace Database\Seeders\General;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\General\Power;
use App\Enums\Generals\Powers;

class PowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Powers::cases() as $enum) {
            Power::updateOrCreate(
                ['power' => $enum->value]
            );
        }
    }
}
