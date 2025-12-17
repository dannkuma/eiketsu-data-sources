<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\HeirloomEffectDescriptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeirloomEffectDescription extends Model
{
    protected $fillable = ['heirloom_effect_description'];

    protected $casts = [
        'heirloom_effect_description' => HeirloomEffectDescriptions::class,
    ];

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
