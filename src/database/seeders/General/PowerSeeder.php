<?php

namespace Database\Seeders\General;

use App\Enums\Generals\Powers;
use App\Models\General\Power;
use Illuminate\Database\Seeder;

class PowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Powers::cases() as $enum) {
            Power::updateOrCreate(
                ['power' => $enum->value],
                ['power' => $enum->value]
            );
        }
    }
}
