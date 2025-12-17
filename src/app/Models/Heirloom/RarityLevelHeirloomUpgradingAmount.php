<?php

namespace App\Models\Heirloom;

use App\Models\Rarity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RarityLevelHeirloomUpgradingAmount extends Model
{
    protected $fillable = ['rarity_id', 'level_id', 'heirloom_upgrading_amount_id'];

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class);
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    public function heirloomUpgradingAmount(): BelongsTo
    {
        return $this->belongsTo(HeirloomUpgradingAmount::class);
    }

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
