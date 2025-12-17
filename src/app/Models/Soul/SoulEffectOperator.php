<?php

namespace App\Models\Soul;

use App\Enums\Souls\SoulEffectOperators;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
