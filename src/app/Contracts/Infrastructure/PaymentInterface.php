<?php

namespace App\Contracts\Infrastructure;

use App\Enums\StripePricePlans;
use Illuminate\Contracts\Support\Responsable;

interface PaymentInterface
{
    /**
     * 大判（バランス）購入のための決済処理を開始する
     *
     * @param  int  $quantity  購入する数量
     * @param  StripePricePlans  $plan  購入する商品の価格識別子
     */
    public function initiateChargeBalance(int $quantity, StripePricePlans $plan): Responsable;
}
