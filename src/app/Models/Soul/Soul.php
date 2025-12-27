<?php

namespace App\Models\Soul;

use App\Models\Heirloom\HeirloomSoulClassification;
use App\Models\Rarity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Soul extends Model
{
    protected $fillable = ['soul_name', 'rarity_id', 'heirloom_soul_classification_id', 'soul_purchase_amount_id', 'soul_sale_amount_id'];

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

    public function soulInitialEffects(): BelongsToMany
    {
        return $this->belongsToMany(SoulEffect::class, 'soul_initial_effects')->withTimestamps();
    }

    public function soulUsers(): HasMany
    {
        return $this->hasMany(SoulUser::class);
    }
}
