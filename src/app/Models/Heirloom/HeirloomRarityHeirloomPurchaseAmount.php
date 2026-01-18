<?php

namespace App\Models\Heirloom;

use App\Models\Rarity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HeirloomRarityHeirloomPurchaseAmount extends Model
{
    protected $fillable = ['rarity_id', 'heirloom_purchase_amount_id', 'heirloom_id'];

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class);
    }

    public function heirloomPurchaseAmount(): BelongsTo
    {
        return $this->belongsTo(HeirloomPurchaseAmount::class);
    }

    public function heirloom(): BelongsTo
    {
        return $this->belongsTo(Heirloom::class);
    }
}
