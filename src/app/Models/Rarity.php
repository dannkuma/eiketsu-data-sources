<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\General\General;
use App\Models\Heirloom\RarityHeirloomPurchaseAmount;
use App\Models\Heirloom\RarityLevelHeirloomSaleAmount;
use App\Models\Heirloom\RarityLevelHeirloomUpgradingAmount;
use App\Enums\Rarities;

class Rarity extends Model
{
    protected $fillable = ['rarity'];

    protected $casts = [
        'rarity' => Rarities::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }

    public function rarityHeirloomPurchaseAmounts(): HasMany
    {
        return $this->hasMany(RarityHeirloomPurchaseAmount::class);
    }

    public function rarityLevelHeirloomSaleAmounts(): HasMany
    {
        return $this->hasMany(RarityLevelHeirloomSaleAmount::class);
    }

    public function rarityLevelHeirloomUpgradingAmounts(): HasMany
    {
        return $this->hasMany(RarityLevelHeirloomUpgradingAmount::class);
    }
}
