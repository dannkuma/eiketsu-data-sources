<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faction_colors', function (Blueprint $table) {
            $table->id();
            $table->string('faction_color')->unique();
            $table->timestamps();
        });
        Schema::create('release_sets', function (Blueprint $table) {
            $table->id();
            $table->string('release_set')->unique();
            $table->timestamps();
        });
        Schema::create('card_types', function (Blueprint $table) {
            $table->id();
            $table->string('card_type')->unique();
            $table->timestamps();
        });
        Schema::create('rarities', function (Blueprint $table) {
            $table->id();
            $table->string('rarity')->unique();
            $table->timestamps();
        });
        Schema::create('periods', function (Blueprint $table) {
            $table->id();
            $table->string('period')->unique();
            $table->timestamps();
        });
        Schema::create('unit_types', function (Blueprint $table) {
            $table->id();
            $table->string('unit_type')->unique();
            $table->timestamps();
        });
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->double('cost')->unique();
            $table->timestamps();
        });
        Schema::create('powers', function (Blueprint $table) {
            $table->id();
            $table->integer('power')->unique();
            $table->timestamps();
        });
        Schema::create('intelligences', function (Blueprint $table) {
            $table->id();
            $table->integer('intelligence')->unique();
            $table->timestamps();
        });
        Schema::create('strategy_names', function (Blueprint $table) {
            $table->id();
            $table->string('strategy_name')->unique();
            $table->timestamps();
        });
        Schema::create('strategy_name_furiganas', function (Blueprint $table) {
            $table->id();
            $table->string('strategy_name_furigana')->unique();
            $table->timestamps();
        });
        Schema::create('required_energies', function (Blueprint $table) {
            $table->id();
            $table->integer('required_energy')->unique();
            $table->timestamps();
        });
        Schema::create('strategy_effect_times', function (Blueprint $table) {
            $table->id();
            $table->string('strategy_effect_time')->unique();
            $table->timestamps();
        });
        Schema::create('strategy_overviews', function (Blueprint $table) {
            $table->id();
            $table->string('strategy_overview')->unique();
            $table->timestamps();
        });
        Schema::create('illustrations', function (Blueprint $table) {
            $table->id();
            $table->string('illustration')->unique();
            $table->timestamps();
        });
        Schema::create('character_voices', function (Blueprint $table) {
            $table->id();
            $table->string('character_voice')->unique();
            $table->timestamps();
        });
        Schema::create('get_methods', function (Blueprint $table) {
            $table->id();
            $table->string('get_method')->unique();
            $table->timestamps();
        });
        Schema::create('effect_ranges', function (Blueprint $table) {
            $table->id();
            $table->string('effect_range')->unique();
            $table->string('path')->unique();
            $table->timestamps();
        });
        Schema::create('general_provided_starts', function (Blueprint $table) {
            $table->id();
            $table->date('general_provided_start')->unique();
            $table->timestamps();
        });
        Schema::create('general_provided_ends', function (Blueprint $table) {
            $table->id();
            $table->date('general_provided_end')->unique();
            $table->timestamps();
        });
        Schema::create('special_skills', function (Blueprint $table) {
            $table->id();
            $table->string('special_skill')->unique();
            $table->timestamps();
        });
        Schema::create('strategy_categories', function (Blueprint $table) {
            $table->id();
            $table->string('strategy_category')->unique();
            $table->timestamps();
        });
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_furigana');
            $table->foreignId('faction_color_id')->constrained();
            $table->foreignId('release_set_id')->constrained();
            $table->foreignId('card_type_id')->constrained();
            $table->foreignId('rarity_id')->constrained();
            $table->foreignId('period_id')->constrained();
            $table->foreignId('unit_type_id')->constrained();
            $table->foreignId('cost_id')->constrained();
            $table->foreignId('power_id')->constrained();
            $table->foreignId('intelligence_id')->constrained();
            $table->foreignId('strategy_name_id')->constrained();
            $table->foreignId('strategy_name_furigana_id')->constrained();
            $table->foreignId('required_energy_id')->constrained();
            $table->foreignId('strategy_effect_time_id')->constrained();
            $table->foreignId('strategy_overview_id')->constrained();
            $table->foreignId('illustration_id')->constrained();
            $table->foreignId('character_voice_id')->constrained();
            $table->foreignId('effect_range_id')->constrained();
            $table->timestamps();
        });
        Schema::create('general_get_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('general_id')->constrained();
            $table->foreignId('get_method_id')->constrained();
            $table->foreignId('general_provided_start_id')->constrained();
            $table->foreignId('general_provided_end_id')->constrained();
            $table->timestamps();
            $table->unique(['general_id', 'get_method_id', 'general_provided_start_id', 'general_provided_end_id'], 'general_get_method_unique');
        });
        Schema::create('general_special_skills', function (Blueprint $table) {
            $table->foreignId('general_id')->constrained();
            $table->foreignId('special_skill_id')->constrained();
            $table->timestamps();
            $table->unique(['general_id', 'special_skill_id'], 'general_special_skill_unique');
        });
        Schema::create('general_strategy_categories', function (Blueprint $table) {
            $table->foreignId('general_id')->constrained();
            $table->foreignId('strategy_category_id')->constrained();
            $table->timestamps();
            $table->unique(['general_id', 'strategy_category_id'], 'general_strategy_category_unique');
        });
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('general_id')->constrained();
            $table->timestamps();
            $table->unique(['user_id', 'general_id'], 'favorite_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('favorites', function (Blueprint $table) {
            $table->dropUnique('favorite_unique');
            $table->dropForeign(['user_id']);
            $table->dropForeign(['general_id']);
        });
        Schema::dropIfExists('favorites');
        Schema::table('general_strategy_categories', function (Blueprint $table) {
            $table->dropUnique('general_strategy_category_unique');
            $table->dropForeign(['general_id']);
            $table->dropForeign(['strategy_category_id']);
        });
        Schema::dropIfExists('general_strategy_categories');
        Schema::table('general_special_skills', function (Blueprint $table) {
            $table->dropUnique('general_special_skill_unique');
            $table->dropForeign(['general_id']);
            $table->dropForeign(['special_skill_id']);
        });
        Schema::dropIfExists('general_special_skills');
        Schema::table('general_get_methods', function (Blueprint $table) {
            $table->dropUnique('general_get_method_unique');
            $table->dropForeign(['general_id']);
            $table->dropForeign(['get_method_id']);
            $table->dropForeign(['general_provided_start_id']);
            $table->dropForeign(['general_provided_end_id']);
        });
        Schema::dropIfExists('general_get_methods');
        Schema::table('generals', function (Blueprint $table) {
            $table->dropForeign(['faction_color_id']);
            $table->dropForeign(['release_set_id']);
            $table->dropForeign(['card_type_id']);
            $table->dropForeign(['period_id']);
            $table->dropForeign(['unit_type_id']);
            $table->dropForeign(['cost_id']);
            $table->dropForeign(['power_id']);
            $table->dropForeign(['intelligence_id']);
            $table->dropForeign(['strategy_name_id']);
            $table->dropForeign(['strategy_name_furigana_id']);
            $table->dropForeign(['required_energy_id']);
            $table->dropForeign(['strategy_effect_time_id']);
            $table->dropForeign(['strategy_overview_id']);
            $table->dropForeign(['illustration_id']);
            $table->dropForeign(['character_voice_id']);
            $table->dropForeign(['effect_range_id']);
        });
        Schema::dropIfExists('generals');
        Schema::dropIfExists('strategy_categories');
        Schema::dropIfExists('special_skills');
        Schema::dropIfExists('general_provided_ends');
        Schema::dropIfExists('general_provided_starts');
        Schema::dropIfExists('effect_ranges');
        Schema::dropIfExists('get_methods');
        Schema::dropIfExists('character_voices');
        Schema::dropIfExists('illustrations');
        Schema::dropIfExists('strategy_overviews');
        Schema::dropIfExists('strategy_effect_times');
        Schema::dropIfExists('required_energies');
        Schema::dropIfExists('strategy_name_furiganas');
        Schema::dropIfExists('strategy_names');
        Schema::dropIfExists('intelligences');
        Schema::dropIfExists('powers');
        Schema::dropIfExists('costs');
        Schema::dropIfExists('unit_types');
        Schema::dropIfExists('periods');
        Schema::dropIfExists('card_types');
        Schema::dropIfExists('release_sets');
        Schema::dropIfExists('faction_colors');

    }
};
