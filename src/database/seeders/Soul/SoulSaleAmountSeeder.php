<?php

namespace Database\Seeders\Soul;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Soul\SoulSaleAmount;
use App\Enums\Souls\SoulSaleAmounts;

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
