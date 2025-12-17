<?php

namespace App\Models\General;

use App\Enums\Generals\StrategyEffectTimes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
