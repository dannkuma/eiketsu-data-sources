<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\RequiredEnergies;

class RequiredEnergy extends Model
{
    protected $fillable = ['required_energy'];

    protected $casts = [
        'required_energy' => RequiredEnergies::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
