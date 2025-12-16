<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeirloomValue extends Model
{
    protected $fillable = ['heirloom_value'];

    public function heirloomEffects(): HasMany
    {
        return $this->hasMany(HeirloomEffect::class);
    }
}
