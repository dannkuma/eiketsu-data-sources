<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\HeirloomEffect;
use App\Enums\Heirlooms\HeirloomEffectUnits;

class HeirloomEffectUnit extends Model
{
    protected $fillable = ['heirloom_effect_unit'];

    protected $casts = [
        'heirloom_effect_unit' => HeirloomEffectUnits::class,
    ];

    public function effects(): HasMany
    {
        return $this->hasMany(HeirloomEffect::class);
    }
}
