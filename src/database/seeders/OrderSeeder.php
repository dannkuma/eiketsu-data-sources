<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
                'stripe_event_id' => 'event_'.Str::random(24), // ダミーのstripe_event_idを生成
            ];
        })->toArray();

        Order::upsert(
            $insertOrders,
            ['product_id', 'user_id'],
            ['stripe_event_id']
        );
    }
}
