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
        Schema::create('soul_purchase_amounts', function (Blueprint $table) {
            $table->id();
            $table->integer('soul_purchase_amount')->unique();
            $table->timestamps();
        });
        Schema::create('soul_sale_amounts', function (Blueprint $table) {
            $table->id();
            $table->integer('soul_sale_amount')->unique();
            $table->timestamps();
        });
        Schema::create('soul_effect_categories', function (Blueprint $table) {
            $table->id();
            $table->string('soul_effect_category')->unique();
            $table->timestamps();
        });
        Schema::create('soul_effect_operators', function (Blueprint $table) {
            $table->id();
            $table->string('soul_effect_operator')->unique();
            $table->timestamps();
        });
        Schema::create('soul_values', function (Blueprint $table) {
            $table->id();
            $table->double('soul_value')->unique();
            $table->timestamps();
        });
        Schema::create('soul_effect_units', function (Blueprint $table) {
            $table->id();
            $table->string('soul_effect_unit')->unique();
            $table->timestamps();
        });
        Schema::create('soul_effects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soul_effect_category_id')->constrained();
            $table->foreignId('soul_effect_operator_id')->constrained();
            $table->foreignId('soul_value_id')->constrained();
            $table->foreignId('soul_effect_unit_id')->constrained();
            $table->unique(['soul_effect_category_id', 'soul_effect_operator_id', 'soul_value_id', 'soul_effect_unit_id'], 'soul_effect_unique');
            $table->timestamps();
        });
        Schema::create('souls', function (Blueprint $table) {
            $table->id();
            $table->string('soul_name');
            $table->foreignId('heirloom_soul_classification_id')->constrained();
            $table->foreignId('rarity_id')->constrained('rarities');
            $table->foreignId('soul_purchase_amount_id')->constrained('soul_purchase_amounts');
            $table->foreignId('soul_sale_amount_id')->constrained('soul_sale_amounts');
            $table->timestamps();
        });
        Schema::create('soul_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soul_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('lock')->default(false);
            $table->timestamps();
        });
        Schema::create('soul_user_effects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soul_user_id')->constrained();
            $table->foreignId('soul_effect_id')->constrained();
            $table->boolean('effect_fixed_flag')->default(false);
            $table->timestamps();
        });
        Schema::create('soul_initial_effects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soul_id')->constrained();
            $table->foreignId('soul_effect_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('soul_initial_effects', function (Blueprint $table) {
            $table->dropForeign(['soul_id']);
            $table->dropForeign(['soul_effect_id']);
        });
        Schema::dropIfExists('soul_initial_effects');
        Schema::table('soul_user_effects', function (Blueprint $table) {
            $table->dropForeign(['soul_user_id']);
            $table->dropForeign(['soul_effect_id']);
        });
        Schema::dropIfExists('soul_user_effects');
        Schema::table('soul_users', function (Blueprint $table) {
            $table->dropForeign(['soul_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('soul_users');
        Schema::table('souls', function (Blueprint $table) {
            $table->dropForeign(['heirloom_soul_classification_id']);
            $table->dropForeign(['rarity_id']);
            $table->dropForeign(['soul_purchase_amount_id']);
            $table->dropForeign(['soul_sale_amount_id']);
        });
        Schema::dropIfExists('souls');
        Schema::table('soul_effects', function (Blueprint $table) {
            $table->dropForeign(['soul_effect_category_id']);
            $table->dropForeign(['soul_effect_operator_id']);
            $table->dropForeign(['soul_value_id']);
            $table->dropForeign(['soul_effect_unit_id']);
            $table->dropUnique('soul_effect_unique');
        });
        Schema::dropIfExists('soul_effects');
        Schema::table('soul_effect_units', function (Blueprint $table) {
            $table->dropUnique(['soul_effect_unit']);
        });
        Schema::dropIfExists('soul_effect_units');
        Schema::table('soul_values', function (Blueprint $table) {
            $table->dropUnique(['soul_value']);
        });
        Schema::dropIfExists('soul_values');
        Schema::table('soul_effect_operators', function (Blueprint $table) {
            $table->dropUnique(['soul_effect_operator']);
        });
        Schema::dropIfExists('soul_effect_operators');
        Schema::table('soul_effect_categories', function (Blueprint $table) {
            $table->dropUnique(['soul_effect_category']);
        });
        Schema::dropIfExists('soul_effect_categories');
        Schema::table('soul_sale_amounts', function (Blueprint $table) {
            $table->dropUnique(['soul_sale_amount']);
        });
        Schema::dropIfExists('soul_sale_amounts');
        Schema::table('soul_purchase_amounts', function (Blueprint $table) {
            $table->dropUnique(['soul_purchase_amount']);
        });
        Schema::dropIfExists('soul_purchase_amounts');
    }
};
