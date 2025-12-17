<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomSaleAmounts;
use App\Models\Heirloom\HeirloomSaleAmount;
use Illuminate\Database\Seeder;

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
