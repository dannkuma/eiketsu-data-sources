<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\General\Rarity;
use App\Models\Heirloom\HeirloomPurchaseAmount;
use App\Models\Heirloom\Heirloom;

class RarityHeirloomPurchaseAmount extends Model
{
    protected $fillable = [ 'rarity_id', 'heirloom_purchase_amount_id' ];

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
