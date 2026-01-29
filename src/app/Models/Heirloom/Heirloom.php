<?php

namespace App\Models\Heirloom;

use App\Models\Rarity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Heirloom extends Model
{
    protected $fillable = ['name', 'name_furigana', 'rarity_id', 'heirloom_soul_classification_id'];

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class);
    }

    public function heirloomSoulClassification(): BelongsTo
    {
        return $this->belongsTo(HeirloomSoulClassification::class);
    }

    public function heirloomRarityHeirloomPurchaseAmount(): HasMany
    {
        return $this->hasMany(HeirloomRarityHeirloomPurchaseAmount::class);
    }

    public function heirloomRarityHeirloomSaleAmount(): HasMany
    {
        return $this->hasMany(HeirloomRarityHeirloomSaleAmount::class);
    }

    public function heirloomRarityLevelHeirloomUpgradingAmount(): HasMany
    {
        return $this->hasMany(HeirloomRarityLevelHeirloomUpgradingAmount::class);
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
