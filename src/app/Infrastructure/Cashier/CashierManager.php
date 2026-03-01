<?php

namespace App\Infrastructure\Cashier;

use App\Contracts\Infrastructure\PaymentInterface;
use App\Enums\StripePricePlans;
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
        $priceId = $plan->getPriceId();

        // 現在ログインしているユーザーのチェックアウトセッションを作成して返す
        return Auth::user()->checkout(
            [$priceId => $quantity],
            [
                'success_url' => route('checkout.success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout.cancel'),
                'metadata' => [
                    'user_id' => Auth::id(),
                    'stripe_price_id' => $priceId,
                ],
            ]
        );
    }
}
