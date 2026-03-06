<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 */
class Price extends Model
{
    protected $fillable = ['stripe_price_id', 'price'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * stripePriceIdを元に価格と商品を取得する
     *
     * @param  string  $stripePriceId  Stripeの価格ID
     * @return self|null 対応する価格と商品、見つからない場合はnull
     */
    public static function findPriceAndProductByStripePriceId(string $stripePriceId): ?self
    {
        return self::where('stripe_price_id', $stripePriceId)
            ->with('products') // 価格に関連する商品も一緒に取得
            ->first();
    }
}
