<?php

namespace Database\Seeders\Soul;

use App\Models\Soul\Soul;
use Illuminate\Database\Seeder;

class SoulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $souls = [
            [
                'soul_name' => 'R宝物用英魂',
                'heirloom_soul_classification_id' => 1,
                'rarity_id' => 2,
                'soul_purchase_amount_id' => 1,
                'soul_sale_amount_id' => 1,
            ],
            [
                'soul_name' => 'R鎧兜用英魂',
                'heirloom_soul_classification_id' => 2,
                'rarity_id' => 2,
                'soul_purchase_amount_id' => 1,
                'soul_sale_amount_id' => 1,
            ],
            [
                'soul_name' => 'R武器用英魂',
                'heirloom_soul_classification_id' => 3,
                'rarity_id' => 2,
                'soul_purchase_amount_id' => 1,
                'soul_sale_amount_id' => 1,
            ],
            [
                'soul_name' => 'R軍配用英魂',
                'heirloom_soul_classification_id' => 4,
                'rarity_id' => 2,
                'soul_purchase_amount_id' => 1,
                'soul_sale_amount_id' => 1,
            ],
            [
                'soul_name' => 'R馬用英魂',
                'heirloom_soul_classification_id' => 5,
                'rarity_id' => 2,
                'soul_purchase_amount_id' => 1,
                'soul_sale_amount_id' => 1,
            ],
            [
                'soul_name' => 'R書物用英魂',
                'heirloom_soul_classification_id' => 6,
                'rarity_id' => 2,
                'soul_purchase_amount_id' => 1,
                'soul_sale_amount_id' => 1,
            ],
            [
                'soul_name' => 'SR宝物用英魂',
                'heirloom_soul_classification_id' => 1,
                'rarity_id' => 3,
                'soul_purchase_amount_id' => 2,
                'soul_sale_amount_id' => 2,
            ],
            [
                'soul_name' => 'SR鎧兜用英魂',
                'heirloom_soul_classification_id' => 2,
                'rarity_id' => 3,
                'soul_purchase_amount_id' => 2,
                'soul_sale_amount_id' => 2,
            ],
            [
                'soul_name' => 'SR武器用英魂',
                'heirloom_soul_classification_id' => 3,
                'rarity_id' => 3,
                'soul_purchase_amount_id' => 2,
                'soul_sale_amount_id' => 2,
            ],
            [
                'soul_name' => 'SR軍配用英魂',
                'heirloom_soul_classification_id' => 4,
                'rarity_id' => 3,
                'soul_purchase_amount_id' => 2,
                'soul_sale_amount_id' => 2,
            ],
            [
                'soul_name' => 'SR馬用英魂',
                'heirloom_soul_classification_id' => 5,
                'rarity_id' => 3,
                'soul_purchase_amount_id' => 2,
                'soul_sale_amount_id' => 2,
            ],
            [
                'soul_name' => 'SR書物用英魂',
                'heirloom_soul_classification_id' => 6,
                'rarity_id' => 3,
                'soul_purchase_amount_id' => 2,
                'soul_sale_amount_id' => 2,
            ],
            [
                'soul_name' => 'SR宝石用英魂',
                'heirloom_soul_classification_id' => 7,
                'rarity_id' => 3,
                'soul_purchase_amount_id' => 2,
                'soul_sale_amount_id' => 2,
            ],
        ];

        Soul::upsert(
            $souls,
            ['heirloom_soul_classification_id', 'rarity_id', 'soul_purchase_amount_id', 'soul_sale_amount_id'],
            ['soul_name']
        );
    }
}
