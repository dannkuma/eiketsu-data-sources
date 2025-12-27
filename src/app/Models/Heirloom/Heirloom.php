<?php

namespace App\Models\Heirloom;

use App\Models\Rarity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Heirloom extends Model
{
    protected $fillable = ['name', 'name_furigana', 'rarity_id', 'heirloom_soul_classification_id', 'rarity_heirloom_purchase_amount_id', 'rarity_level_heirloom_sale_amount_id', 'rarity_level_heirloom_upgrading_amount_id'];

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class);
    }

    public function heirloomSoulClassification(): BelongsTo
    {
        return $this->belongsTo(HeirloomSoulClassification::class);
    }

    public function rarityHeirloomPurchaseAmount(): BelongsTo
    {
        return $this->belongsTo(RarityHeirloomPurchaseAmount::class);
    }

    public function rarityLevelHeirloomSaleAmount(): BelongsTo
    {
        return $this->belongsTo(RarityLevelHeirloomSaleAmount::class);
    }

    public function rarityLevelHeirloomUpgradingAmount(): BelongsTo
    {
        return $this->belongsTo(RarityLevelHeirloomUpgradingAmount::class);
    }

    public function heirloomEffectSummaries(): HasMany
    {
        return $this->hasMany(HeirloomEffectSummary::class);
    }

    public function heirloomUserLevels(): HasMany
    {
        return $this->hasMany(HeirloomUserLevel::class);
    }
}
