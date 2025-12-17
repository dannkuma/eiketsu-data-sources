<?php

namespace Database\Seeders\General;

use App\Enums\Generals\CardTypes;
use App\Models\General\CardType;
use Illuminate\Database\Seeder;

class CardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (CardTypes::cases() as $enum) {
            CardType::updateOrCreate(
                ['card_type' => $enum->value],
                ['card_type' => $enum->value]
            );
        }
    }
}
