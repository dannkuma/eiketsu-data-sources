<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\FactionColors;

class FactionColor extends Model
{
    protected $fillable = ['faction_color'];

    protected $casts = [
        'faction_color' => FactionColors::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
