<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = ['user_id', 'product_id', 'stripe_event_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * ordersテーブルに注文情報を保存する
     *
     * @param  string  $userId  ユーザーID
     * @param  string  $productId  商品ID
     * @param  string  $stripeEventId  StripeのイベントID
     * @return Order 保存されたOrderインスタンス
     */
    public static function createOrder(string $userId, string $productId, string $stripeEventId): Order
    {
        return self::create([
            'user_id' => $userId,
            'product_id' => $productId,
            'stripe_event_id' => $stripeEventId,
        ]);
    }

    /**
     * 引数で受け取ったイベントIDを持つ注文の存在チェック
     *
     * @param  string  $stripeEventId  StripeのイベントID
     * @return bool 存在する場合はtrue、存在しない場合はfalse
     */
    public static function existsByStripeEventId(string $stripeEventId): bool
    {
        return self::where('stripe_event_id', $stripeEventId)->exists();
    }
}
