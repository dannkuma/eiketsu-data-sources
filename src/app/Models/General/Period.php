<?php

namespace App\Models\General;

use App\Enums\Generals\Periods;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
