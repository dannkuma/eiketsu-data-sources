<?php

namespace Database\Seeders\Soul;

use App\Enums\Souls\SoulSaleAmounts;
use App\Models\Soul\SoulSaleAmount;
use Illuminate\Database\Seeder;

class SoulSaleAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SoulSaleAmounts::cases() as $enum) {
            SoulSaleAmount::updateOrCreate(
                ['soul_sale_amount' => $enum->value]
            );
        }
    }
}
