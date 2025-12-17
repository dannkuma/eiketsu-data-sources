<?php

namespace App\Models\General;

use App\Enums\Generals\Intelligences;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Intelligence extends Model
{
    protected $fillable = ['intelligence'];

    protected $casts = [
        'intelligence' => Intelligences::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
