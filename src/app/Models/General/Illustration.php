<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Illustration extends Model
{
    protected $fillable = ['illustration'];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
