<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Generals\CardTypes;
use App\Models\General\CardType;

class CardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (CardTypes::cases() as $enum) {
            CardType::updateOrCreate(
                ['card_type' => $enum->value]
            );
        }
    }
}
