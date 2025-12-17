<?php

namespace App\Models\General;

use App\Enums\Generals\ReleaseSets;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReleaseSet extends Model
{
    protected $fillable = ['release_set'];

    protected $casts = [
        'release_set' => ReleaseSets::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
