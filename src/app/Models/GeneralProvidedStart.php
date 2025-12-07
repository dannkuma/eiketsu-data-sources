<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GeneralProvidedStart extends Model
{
    protected $fillable = ['general_provided_start'];

    public function generalGetMethods(): HasMany
    {
        return $this->hasMany(GeneralGetMethod::class);
    }
}
