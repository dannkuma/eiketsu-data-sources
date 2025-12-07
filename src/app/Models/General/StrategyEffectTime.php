<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\StrategyEffectTimes;

class StrategyEffectTime extends Model
{
    protected $fillable = ['strategy_effect_time'];

    protected $casts = [
        'strategy_effect_time' => StrategyEffectTimes::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
