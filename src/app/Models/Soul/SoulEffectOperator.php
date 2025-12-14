<?php

namespace App\Models\Soul;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Soul\SoulEffect;
use App\Enums\Souls\SoulEffectOperators;

use Illuminate\Database\Eloquent\Model;

class SoulEffectOperator extends Model
{
    protected $fillable = ['soul_effect_operator'];

    protected function casts(): array
    {
        return [
            'soul_effect_operator' => SoulEffectOperators::class,
        ];
    }

    public function soulEffects(): HasMany
    {
        return $this->hasMany(SoulEffect::class);
    }
}
