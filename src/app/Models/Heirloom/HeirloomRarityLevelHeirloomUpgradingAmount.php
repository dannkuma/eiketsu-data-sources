<?php

namespace App\Models\Heirloom;

use App\Models\Rarity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HeirloomRarityLevelHeirloomUpgradingAmount extends Model
{
    protected $fillable = ['rarity_id', 'level_id', 'heirloom_upgrading_amount_id', 'heirloom_id'];

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

    public function heirloom(): BelongsTo
    {
        return $this->belongsTo(Heirloom::class);
    }
}
