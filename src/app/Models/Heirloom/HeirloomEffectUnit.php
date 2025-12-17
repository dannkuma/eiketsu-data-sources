<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\HeirloomEffectUnits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
