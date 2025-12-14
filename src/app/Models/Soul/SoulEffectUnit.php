<?php

namespace App\Models\Soul;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Soul\SoulEffect;
use App\Enums\Souls\SoulEffectUnits;

class SoulEffectUnit extends Model
{
    protected $fillable = ['soul_effect_unit'];

    protected function casts(): array
    {
        return [
            'soul_effect_unit' => SoulEffectUnits::class,
        ];
    }

    public function soulEffects(): HasMany
    {
        return $this->hasMany(SoulEffect::class);
    }
}