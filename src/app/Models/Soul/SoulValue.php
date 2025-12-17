<?php

namespace App\Models\Soul;

use App\Enums\Souls\SoulValues;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SoulValue extends Model
{
    protected $fillable = ['soul_value'];

    // Enumインスタンスで取得
    public function getSoulValueEnumAttribute(): ?SoulValues
    {
        return SoulValues::tryFrom((string) $this->soul_value);
    }

    // Enumインスタンスで設定
    public function setSoulValueEnumAttribute(SoulValues $enum): void
    {
        $this->attributes['soul_value'] = (float) $enum->value;
    }

    public function soulEffects(): HasMany
    {
        return $this->hasMany(SoulEffect::class);
    }
}
