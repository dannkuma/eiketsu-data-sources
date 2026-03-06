<?php

namespace App\Enums\Messages;

enum Payments: string
{
    case PRICE_NOT_FOUND = 'PRICE_NOT_FOUND';
    case DUPLICATE_ORDER = 'DUPLICATE_ORDER';
    case FAILED_TO_UPDATE_BALANCE = 'FAILED_TO_UPDATE_BALANCE';

    public function getMessage(): string
    {
        return match ($this) {
            self::PRICE_NOT_FOUND => 'StripePriceIdに紐づく価格データが見つかりません。',
            self::DUPLICATE_ORDER => '同じイベントIDの注文がすでに存在します。',
            self::FAILED_TO_UPDATE_BALANCE => 'ユーザーの大判の更新に失敗しました。',
        };
    }
}
