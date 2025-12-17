<?php

namespace App\Models\General;

use App\Enums\Generals\RequiredEnergies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
