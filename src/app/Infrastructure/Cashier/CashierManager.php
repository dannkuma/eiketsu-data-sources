<?php

namespace App\Infrastructure\Cashier;

use App\Contracts\Infrastructure\PaymentInterface;
use App\Enums\StripePricePlans;
use App\Models\Price;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class CashierManager implements PaymentInterface
{
    /**
     * 大判を購入する
     *
     * @param  int  $quantity  購入する数量
     * @param  StripePricePlans  $plan  購入する商品の価格識別子
     */
    public function initiateChargeBalance(int $quantity, StripePricePlans $plan): Responsable
    {
        // 価格識別子から価格IDを取得
        $stripePriceId = $plan->getPriceId();
        // 価格IDから商品IDを取得
        $productId = Price::findPriceAndProductByStripePriceId($stripePriceId)?->products?->first()?->id;

        // 現在ログインしているユーザーのチェックアウトセッションを作成して返す
        return Auth::user()->checkout(
            [$stripePriceId => $quantity],
            [
                'success_url' => route('checkout.success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout.cancel'),
                'metadata' => [
                    'user_id' => Auth::id(),
                    'product_id' => $productId,
                    'stripe_price_id' => $stripePriceId,
                ],
            ]
        );
    }
}
