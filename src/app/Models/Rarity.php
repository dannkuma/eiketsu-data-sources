<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\General\General;
use App\Enums\Rarities;

class Rarity extends Model
{
    protected $fillable = ['rarity'];

    protected $casts = [
        'rarity' => Rarities::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
