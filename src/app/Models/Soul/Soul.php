<?php

namespace App\Models\Soul;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Heirloom\HeirloomSoulClassification;
use App\Models\Rarity;
use App\Models\Soul\SoulPurchaseAmount;
use App\Models\Soul\SoulSaleAmount;

class Soul extends Model
{
    protected $fillable = [ 'soul_name', 'rarity_id', 'heirloom_soul_classification_id', 'soul_purchase_amount_id', 'soul_sale_amount_id'];

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class);
    }

    public function heirloomSoulClassification(): BelongsTo
    {
        return $this->belongsTo(HeirloomSoulClassification::class);
    }

    public function soulPurchaseAmount(): BelongsTo
    {
        return $this->belongsTo(SoulPurchaseAmount::class);
    }

    public function soulSaleAmount(): BelongsTo
    {
        return $this->belongsTo(SoulSaleAmount::class);
    }
}
