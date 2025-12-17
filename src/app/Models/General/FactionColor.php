<?php

namespace App\Models\General;

use App\Enums\Generals\FactionColors;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
