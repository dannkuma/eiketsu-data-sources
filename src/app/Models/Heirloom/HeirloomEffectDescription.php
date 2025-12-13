<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\Heirloom;
use App\Enums\Heirlooms\HeirloomEffectDescriptions;

class HeirloomEffectDescription extends Model
{
    protected $fillable = [ 'heirloom_effect_description' ];

    protected $casts = [
        'heirloom_effect_description' => HeirloomEffectDescriptions::class,
    ];

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
