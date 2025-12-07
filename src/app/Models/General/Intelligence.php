<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\Intelligences;

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
