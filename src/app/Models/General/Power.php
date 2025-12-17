<?php

namespace App\Models\General;

use App\Enums\Generals\Powers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
