<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\Generals\Periods;

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
