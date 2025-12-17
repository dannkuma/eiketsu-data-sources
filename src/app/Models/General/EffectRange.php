<?php

namespace App\Models\General;

use App\Enums\Generals\EffectRanges;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EffectRange extends Model
{
    protected $fillable = ['effect_range', 'path'];

    protected $casts = [
        'effect_range' => EffectRanges::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
