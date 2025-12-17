<?php

namespace App\Models\Heirloom;

use App\Models\Rarity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RarityLevelHeirloomSaleAmount extends Model
{
    protected $fillable = ['rarity_id', 'level_id', 'heirloom_sale_amount_id'];

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class);
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    public function heirloomSaleAmount(): BelongsTo
    {
        return $this->belongsTo(HeirloomSaleAmount::class);
    }

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
