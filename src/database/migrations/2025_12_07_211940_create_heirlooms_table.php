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
        Schema::create('heirloom_soul_classifications', function (Blueprint $table) {
            $table->id();
            $table->string('heirloom_soul_classification')->unique('hsc_uk');
            $table->timestamps();
        });
        Schema::create('heirloom_purchase_amounts', function (Blueprint $table) {
            $table->id();
            $table->integer('heirloom_purchase_amount')->unique();
            $table->timestamps();
        });
        Schema::create('heirloom_sale_amounts', function (Blueprint $table) {
            $table->id();
            $table->integer('heirloom_sale_amount')->unique();
            $table->timestamps();
        });
        Schema::create('heirloom_upgrading_amounts', function (Blueprint $table) {
            $table->id();
            $table->integer('heirloom_upgrading_amount')->unique();
            $table->timestamps();
        });
        Schema::create('levels', function (Blueprint $table) {
            $table->id();
            $table->integer('level')->unique();
            $table->timestamps();
        });
        Schema::create('heirloom_effect_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('heirloom_effect_description')->unique();
            $table->timestamps();
        });
        Schema::create('heirloom_effect_categories', function (Blueprint $table) {
            $table->id();
            $table->string('heirloom_effect_category')->unique();
            $table->timestamps();
        });
        Schema::create('effect_targets', function (Blueprint $table) {
            $table->id();
            $table->string('effect_target')->unique();
            $table->timestamps();
        });
        Schema::create('activation_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('activation_condition')->unique();
            $table->timestamps();
        });
        Schema::create('heirloom_enhancement_types', function (Blueprint $table) {
            $table->id();
            $table->string('heirloom_enhancement_type')->unique();
            $table->timestamps();
        });
        Schema::create('heirloom_effect_operators', function (Blueprint $table) {
            $table->id();
            $table->string('heirloom_effect_operator')->unique();
            $table->timestamps();
        });
        Schema::create('heirloom_values', function (Blueprint $table) {
            $table->id();
            $table->double('heirloom_value')->unique();
            $table->timestamps();
        });
        Schema::create('heirloom_effect_units', function (Blueprint $table) {
            $table->id();
            $table->string('heirloom_effect_unit')->unique();
            $table->timestamps();
        });
        Schema::create('rarity_heirloom_purchase_amounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rarity_id')->constrained(table: 'rarities', indexName: 'rhpa_rarity_foreign');
            $table->foreignId('heirloom_purchase_amount_id')->constrained(table: 'heirloom_purchase_amounts', indexName: 'rhpa_hpa_foreign');
            $table->timestamps();
            $table->unique(['rarity_id', 'heirloom_purchase_amount_id'], 'rarity_heirloom_purchase_amount_unique');
        });
        Schema::create('rarity_level_heirloom_sale_amounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rarity_id')->constrained(table: 'rarities', indexName: 'rlhsa_rarity_foreign');
            $table->foreignId('level_id')->constrained(table: 'levels', indexName: 'rlhsa_level_foreign');
            $table->foreignId('heirloom_sale_amount_id')->constrained(table: 'heirloom_sale_amounts', indexName: 'rlhsa_hsa_foreign');
            $table->timestamps();
            $table->unique(['rarity_id', 'level_id', 'heirloom_sale_amount_id'], 'rarity_level_heirloom_sale_amount_unique');
        });
        Schema::create('rarity_level_heirloom_upgrading_amounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rarity_id')->constrained(table: 'rarities', indexName: 'rlhua_rarity_foreign');
            $table->foreignId('level_id')->constrained(table: 'levels', indexName: 'rlhua_level_foreign');
            $table->foreignId('heirloom_upgrading_amount_id')->constrained(table: 'heirloom_upgrading_amounts', indexName: 'rlhua_hua_foreign');
            $table->timestamps();
            $table->unique(['rarity_id', 'level_id', 'heirloom_upgrading_amount_id'], 'rarity_level_heirloom_upgrading_amount_unique');
        });
        Schema::create('heirlooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_furigana');
            $table->foreignId('rarity_id')->constrained();
            $table->foreignId('heirloom_soul_classification_id')->constrained();
            $table->foreignId('rarity_heirloom_purchase_amount_id')->constrained();
            $table->foreignId('rarity_level_heirloom_sale_amount_id')->constrained();
            $table->foreignId('rarity_level_heirloom_upgrading_amount_id')->constrained();
            $table->timestamps();
        });
        Schema::create('heirloom_effect_summaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('heirloom_id')->constrained();
            $table->foreignId('heirloom_effect_description_id')->constrained();
            $table->foreignId('heirloom_effect_category_id')->constrained();
            $table->foreignId('activation_condition_id')->constrained();
            $table->foreignId('effect_target_id')->constrained();
            $table->integer('effect_classification');
            $table->timestamps();
            $table->unique(['heirloom_id', 'effect_classification'], 'heirloom_effect_summary_unique');
        });
        Schema::create('heirloom_effects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('heirloom_effect_category_id')->constrained();
            $table->foreignId('heirloom_effect_operator_id')->constrained();
            $table->foreignId('heirloom_value_id')->constrained();
            $table->foreignId('heirloom_effect_unit_id')->constrained();
            $table->timestamps();
            $table->unique(['heirloom_effect_category_id', 'heirloom_effect_operator_id', 'heirloom_value_id', 'heirloom_effect_unit_id'], 'heirloom_effect_unique');
        });
        Schema::create('heirloom_effect_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('heirloom_effect_id')->constrained();
            $table->foreignId('heirloom_enhancement_type_id')->constrained();
            $table->timestamps();
            $table->unique(['heirloom_effect_id', 'heirloom_enhancement_type_id'], 'heirloom_effect_detail_unique');
        });
        Schema::create('heirloom_effect_summary_mappings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('heirloom_effect_summary_id')->constrained(table: 'heirloom_effect_summaries', indexName: 'hesm_hes_foreign');
            $table->foreignId('heirloom_effect_detail_id')->constrained(table: 'heirloom_effect_details', indexName: 'hesm_hed_foreign');
            $table->foreignId('level_id')->constrained(table: 'levels', indexName: 'hesm_level_foreign');
            $table->timestamps();
            $table->unique(['heirloom_effect_summary_id', 'heirloom_effect_detail_id', 'level_id'], 'heirloom_effect_summary_mapping_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('heirloom_effect_summary_mappings', function (Blueprint $table) {
            $table->dropForeign('hesm_hes_foreign');
            $table->dropForeign('hesm_hed_foreign');
            $table->dropForeign('hesm_level_foreign');
            $table->dropUnique('heirloom_effect_summary_mapping_unique');
        });
        Schema::dropIfExists('heirloom_effect_summary_mappings');
        Schema::table('heirloom_effect_details', function (Blueprint $table) {
            $table->dropForeign(['heirloom_effect_id']);
            $table->dropForeign(['heirloom_enhancement_type_id']);
            $table->dropUnique('heirloom_effect_detail_unique');
        });
        Schema::dropIfExists('heirloom_effect_details');
        Schema::table('heirloom_effects', function (Blueprint $table) {
            $table->dropForeign(['heirloom_effect_category_id']);
            $table->dropForeign(['heirloom_effect_operator_id']);
            $table->dropForeign(['heirloom_value_id']);
            $table->dropForeign(['heirloom_effect_unit_id']);
            $table->dropUnique('heirloom_effect_unique');
        });
        Schema::dropIfExists('heirloom_effects');
        Schema::table('heirloom_effect_summaries', function (Blueprint $table) {
            $table->dropForeign(['heirloom_id']);
            $table->dropForeign(['heirloom_effect_description_id']);
            $table->dropForeign(['heirloom_effect_category_id']);
            $table->dropForeign(['activation_condition_id']);
            $table->dropForeign(['effect_target_id']);
            $table->dropUnique('heirloom_effect_summary_unique');
        });
        Schema::dropIfExists('heirloom_effect_summaries');
        Schema::table('heirlooms', function (Blueprint $table) {
            $table->dropForeign(['rarity_id']);
            $table->dropForeign(['heirloom_soul_classification_id']);
            $table->dropForeign(['rarity_heirloom_purchase_amount_id']);
            $table->dropForeign(['rarity_level_heirloom_sale_amount_id']);
            $table->dropForeign(['rarity_level_heirloom_upgrading_amount_id']);
        });
        Schema::dropIfExists('heirlooms');

        Schema::table('rarity_level_heirloom_upgrading_amounts', function (Blueprint $table) {
            $table->dropForeign('rlhua_rarity_foreign');
            $table->dropForeign('rlhua_level_foreign');
            $table->dropForeign('rlhua_hua_foreign');
            $table->dropUnique('rarity_level_heirloom_upgrading_amount_unique');
        });
        Schema::dropIfExists('rarity_level_heirloom_upgrading_amounts');
        Schema::table('rarity_level_heirloom_sale_amounts', function (Blueprint $table) {
            $table->dropForeign('rlhsa_rarity_foreign');
            $table->dropForeign('rlhsa_level_foreign');
            $table->dropForeign('rlhsa_hsa_foreign');
            $table->dropUnique('rarity_level_heirloom_sale_amount_unique');
        });
        Schema::dropIfExists('rarity_level_heirloom_sale_amounts');
        Schema::table('rarity_heirloom_purchase_amounts', function (Blueprint $table) {
            $table->dropForeign('rhpa_rarity_foreign');
            $table->dropForeign('rhpa_hpa_foreign');
            $table->dropUnique('rarity_heirloom_purchase_amount_unique');
        });
        Schema::dropIfExists('rarity_heirloom_purchase_amounts');
        Schema::dropIfExists('heirloom_effect_units');
        Schema::dropIfExists('heirloom_values');
        Schema::dropIfExists('heirloom_effect_operators');
        Schema::dropIfExists('heirloom_enhancement_types');
        Schema::dropIfExists('activation_conditions');
        Schema::dropIfExists('effect_targets');
        Schema::dropIfExists('heirloom_effect_categories');
        Schema::dropIfExists('heirloom_effect_descriptions');
        Schema::dropIfExists('levels');
        Schema::dropIfExists('heirloom_upgrading_amounts');
        Schema::dropIfExists('heirloom_sale_amounts');
        Schema::dropIfExists('heirloom_purchase_amounts');
        Schema::dropIfExists('heirloom_soul_classifications');
    }
};
