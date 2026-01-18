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

    public function rarityLevelHeirloomUpgradingAmounts(): HasMany
    {
        return $this->hasMany(HeirloomRarityLevelHeirloomUpgradingAmount::class);
    }

    public function heirloomUserLevels(): HasMany
    {
        return $this->hasMany(HeirloomUserLevel::class);
    }
}
