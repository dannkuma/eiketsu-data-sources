<?php

namespace App\Models\Soul;

use App\Enums\Souls\SoulEffectUnits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
