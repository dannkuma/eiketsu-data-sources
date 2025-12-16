<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\Heirloom;
use App\Enums\Heirlooms\HeirloomEffectCategories;

class HeirloomEffectCategory extends Model
{
    protected $fillable = ['heirloom_effect_category'];

    protected $casts = [
        'heirloom_effect_category' => HeirloomEffectCategories::class,
    ];

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
