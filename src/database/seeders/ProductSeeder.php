<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insertProducts = Price::all()->map(function (Price $price) {
            if ($price->stripe_price_id === config('app.stripe.price_id_one_hundred')) {
                return ['price_id' => $price->id, 'stripe_product_id' => config('app.stripe.product_id_oban'), 'name' => '大判（100枚）', 'description' => '', 'quantity' => 1];
            } elseif ($price->stripe_price_id === config('app.stripe.price_id_three_hundred')) {
                return ['price_id' => $price->id, 'stripe_product_id' => config('app.stripe.product_id_oban'), 'name' => '大判（300枚）', 'description' => '', 'quantity' => 1];
            } elseif ($price->stripe_price_id === config('app.stripe.price_id_five_hundred')) {
                return ['price_id' => $price->id, 'stripe_product_id' => config('app.stripe.product_id_oban'), 'name' => '大判（500枚）', 'description' => '', 'quantity' => 1];
            } elseif ($price->stripe_price_id === config('app.stripe.price_id_thousand')) {
                return ['price_id' => $price->id, 'stripe_product_id' => config('app.stripe.product_id_oban'), 'name' => '大判（1000枚）', 'description' => '', 'quantity' => 1];
            }
        })->toArray();

        Product::upsert(
            $insertProducts,
            ['price_id'],
            ['stripe_product_id', 'name', 'description', 'quantity']
        );
    }
}
