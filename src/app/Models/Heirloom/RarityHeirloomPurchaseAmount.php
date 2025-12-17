<?php

namespace App\Models\Heirloom;

use App\Models\Rarity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RarityHeirloomPurchaseAmount extends Model
{
    protected $fillable = ['rarity_id', 'heirloom_purchase_amount_id'];

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class);
    }

    public function heirloomPurchaseAmount(): BelongsTo
    {
        return $this->belongsTo(HeirloomPurchaseAmount::class);
    }

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
