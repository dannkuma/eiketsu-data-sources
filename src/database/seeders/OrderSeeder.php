<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = User::first()->value('id');
        $insertOrders = Product::all()->map(function (Product $product) use ($userId) {
            return [
                'product_id' => $product->id,
                'user_id' => $userId,
            ];
        })->toArray();

        Order::upsert(
            $insertOrders,
            ['product_id', 'user_id'],
            []
        );
    }
}
