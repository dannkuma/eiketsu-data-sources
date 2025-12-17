<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\Levels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    protected $fillable = ['level'];

    protected $casts = [
        'level' => Levels::class,
    ];

    public function rarityLevelHeirloomSaleAmounts(): HasMany
    {
        return $this->hasMany(RarityLevelHeirloomSaleAmount::class);
    }

    public function rarityLevelHeirloomUpgradingAmounts(): HasMany
    {
        return $this->hasMany(RarityLevelHeirloomUpgradingAmount::class);
    }
}
