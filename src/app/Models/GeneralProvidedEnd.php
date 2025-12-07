<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GeneralProvidedEnd extends Model
{
    protected $fillable = ['general_provided_end'];

    public function generalGetMethods(): HasMany
    {
        return $this->hasMany(GeneralGetMethod::class);
    }
}
