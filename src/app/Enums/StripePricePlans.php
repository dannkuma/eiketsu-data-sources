<?php

namespace App\Enums;

enum StripePricePlans: string
{
    case ONE_HUNDRED = 'one_hundred';
    case THREE_HUNDRED = 'three_hundred';
    case FIVE_HUNDRED = 'five_hundred';
    case THOUSAND = 'thousand';

    /**
     * Enumのケースから対応する Stripe Price ID を取得する
     */
    public function getPriceId(): string
    {
        return config("app.stripe.price_id_{$this->value}");
    }
}
