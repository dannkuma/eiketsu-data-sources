<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\HeirloomSaleAmount;
use App\Enums\Heirlooms\HeirloomSaleAmounts;

class HeirloomSaleAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomSaleAmounts::cases() as $enum) {
            HeirloomSaleAmount::updateOrCreate(
                ['heirloom_sale_amount' => $enum->value]
            );
        }
    }
}
