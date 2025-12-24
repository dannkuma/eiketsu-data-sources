<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\HeirloomValues;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeirloomValue extends Model
{
    protected $fillable = ['heirloom_value'];

    // Enumインスタンスで取得
    public function getHeirloomValueEnumAttribute(): ?HeirloomValues
    {
        return HeirloomValues::tryFrom((string) $this->heirloom_value);
    }

    // Enumインスタンスで設定
    public function setHeirloomValueEnumAttribute(HeirloomValues $enum): void
    {
        $this->attributes['heirloom_value'] = (float) $enum->value;
    }

    public function heirloomEffects(): HasMany
    {
        return $this->hasMany(HeirloomEffect::class);
    }
}
