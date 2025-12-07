<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\Periods;

class Period extends Model
{
    protected $fillable = ['period'];

    protected $casts = [
        'period' => Periods::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
