<?php

namespace App\Services;

use App\Enums\Messages\Payments;
use App\Models\Order;
use App\Models\Price;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderWebhookService
{
    /**
     * Webhookで受け取った注文情報を登録し、ユーザーに大判を付与する
     */
    public function handleOrderWebhook(Request $request)
    {
        $payload = json_decode($request->getContent(), true);

        // 注文の重複登録確認
        if (Order::existsByStripeEventId($payload['id'])) {
            // すでに同じイベントIDの注文が存在する場合はLogに警告を記録して終了
            $code = Payments::DUPLICATE_ORDER;
            $message = $code->getMessage();
            \Log::error($code->value.': '.$message." Stripe Event ID: {$payload['id']}");

            // Webhookのリトライ防止のため、成功レスポンスを返す
            return response()->json(['message' => $message], 200);
        }

        // 価格を取得
        $priceId = $payload['data']['object']['metadata']['stripe_price_id'] ?? null;
        $price = Price::findPriceAndProductByStripePriceId($priceId);

        if (! $price) {
            // 価格が見つからない場合はLogにエラーを記録して終了
            $code = Payments::PRICE_NOT_FOUND;
            $message = $code->getMessage();
            \Log::error($code->value.': '.$message." Stripe Price ID: {$priceId}");

            return response()->json(['error' => $message], 500);
        }

        try {
            DB::transaction(function () use ($payload, $price) {
                $userId = $payload['data']['object']['metadata']['user_id'];
                $productId = $payload['data']['object']['metadata']['product_id'];

                // 注文情報の登録
                Order::createOrder($userId, (string) $productId, $payload['id']);

                // ユーザーの大判を更新
                $customer = User::find($userId);
                $customer->balance += $price->price;
                $customer->save();
            });

            return response()->json(['message' => 'success'], 200);
        } catch (Exception $e) {
            $code = Payments::FAILED_TO_UPDATE_BALANCE;
            $message = $code->getMessage();
            \Log::error($code->value.': '.$message." Stripe Price ID: {$priceId}");
            \Log::error($code->value.': '.$message." message: {$e->getMessage()}");

            return response()->json(['error' => $message], 500);

        }
    }
}
