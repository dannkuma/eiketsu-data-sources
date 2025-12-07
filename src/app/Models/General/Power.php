<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\Generals\Powers;

class Power extends Model
{
    protected $fillable = ['power'];

    protected $casts = [
        'power' => Powers::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
