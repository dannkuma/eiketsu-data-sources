<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Enums\SpecialSkills;

class SpecialSkill extends Model
{
    protected $fillable = ['special_skill'];

    protected $casts = [
        'special_skill' => SpecialSkills::class,
    ];

    public function generals(): BelongsToMany
    {
        return $this->belongsToMany(General::class, 'general_special_skills')->withTimestamps();
    }
}
