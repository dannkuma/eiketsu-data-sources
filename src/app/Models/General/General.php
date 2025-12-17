<?php

namespace App\Models\General;

use App\Models\Rarity;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class General extends Model
{
    protected $fillable = [
        'name',
        'name_furigana',
        'faction_color_id',
        'release_set_id',
        'card_type_id',
        'rarity_id',
        'period_id',
        'unit_type_id',
        'cost_id',
        'power_id',
        'intelligence_id',
        'strategy_name_id',
        'strategy_name_furigana_id',
        'required_energy_id',
        'strategy_effect_time_id',
        'strategy_overview_id',
        'illustration_id',
        'character_voice_id',
        'effect_range_id',
    ];

    public function factionColor(): BelongsTo
    {
        return $this->belongsTo(FactionColor::class);
    }

    public function releaseSet(): BelongsTo
    {
        return $this->belongsTo(ReleaseSet::class);
    }

    public function cardType(): BelongsTo
    {
        return $this->belongsTo(CardType::class);
    }

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class);
    }

    public function period(): BelongsTo
    {
        return $this->belongsTo(Period::class);
    }

    public function unitType(): BelongsTo
    {
        return $this->belongsTo(UnitType::class);
    }

    public function cost(): BelongsTo
    {
        return $this->belongsTo(Cost::class);
    }

    public function power(): BelongsTo
    {
        return $this->belongsTo(Power::class);
    }

    public function intelligence(): BelongsTo
    {
        return $this->belongsTo(Intelligence::class);
    }

    public function strategyName(): BelongsTo
    {
        return $this->belongsTo(StrategyName::class);
    }

    public function strategyNameFurigana(): BelongsTo
    {
        return $this->belongsTo(StrategyNameFurigana::class);
    }

    public function requiredEnergy(): BelongsTo
    {
        return $this->belongsTo(RequiredEnergy::class);
    }

    public function strategyEffectTime(): BelongsTo
    {
        return $this->belongsTo(StrategyEffectTime::class);
    }

    public function strategyOverview(): BelongsTo
    {
        return $this->belongsTo(StrategyOverview::class);
    }

    public function illustration(): BelongsTo
    {
        return $this->belongsTo(Illustration::class);
    }

    public function characterVoice(): BelongsTo
    {
        return $this->belongsTo(CharacterVoice::class);
    }

    public function effectRange(): BelongsTo
    {
        return $this->belongsTo(EffectRange::class);
    }

    public function specialSkills(): BelongsToMany
    {
        return $this->belongsToMany(SpecialSkill::class, 'general_special_skills')->withTimestamps();
    }

    public function strategyCategories(): BelongsToMany
    {
        return $this->belongsToMany(StrategyCategory::class, 'general_strategy_categories')->withTimestamps();
    }

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
    }

    public function generalGetMethods(): HasMany
    {
        return $this->hasMany(GeneralGetMethod::class);
    }
}
