<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\Generals\UnitTypes;

class UnitType extends Model
{
    protected $fillable = ['unit_type'];

    protected $casts = [
        'unit_type' => UnitTypes::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
