<?php

namespace App\Models;

use App\Enums\Rarities;
use App\Models\General\General;
use App\Models\Heirloom\HeirloomRarityHeirloomPurchaseAmount;
use App\Models\Heirloom\HeirloomRarityHeirloomSaleAmount;
use App\Models\Heirloom\HeirloomRarityLevelHeirloomUpgradingAmount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        return $this->hasMany(HeirloomRarityHeirloomPurchaseAmount::class);
    }

    public function rarityHeirloomSaleAmounts(): HasMany
    {
        return $this->hasMany(HeirloomRarityHeirloomSaleAmount::class);
    }

    public function rarityLevelHeirloomUpgradingAmounts(): HasMany
    {
        return $this->hasMany(HeirloomRarityLevelHeirloomUpgradingAmount::class);
    }
}
