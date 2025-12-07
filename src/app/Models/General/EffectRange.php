<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\Generals\EffectRanges;

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
