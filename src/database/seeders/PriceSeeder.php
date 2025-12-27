<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Price::upsert(
            [
                ['stripe_price_id' => config('app.stripe.price_id_one_hundred'), 'price' => 100],
                ['stripe_price_id' => config('app.stripe.price_id_three_hundred'), 'price' => 300],
                ['stripe_price_id' => config('app.stripe.price_id_five_hundred'), 'price' => 500],
                ['stripe_price_id' => config('app.stripe.price_id_thousand'), 'price' => 960],
            ],
            ['stripe_price_id'],
            ['price']
        );
    }
}
