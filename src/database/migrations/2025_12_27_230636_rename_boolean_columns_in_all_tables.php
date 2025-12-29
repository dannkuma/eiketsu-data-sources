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
        Schema::table('soul_users', function (Blueprint $table) {
            $table->renameColumn('lock', 'is_locked');
        });
        Schema::table('heirloom_user_levels', function (Blueprint $table) {
            $table->renameColumn('lock', 'is_locked');
            $table->renameColumn('submission_status', 'is_submitted');
        });
        Schema::table('soul_user_effects', function (Blueprint $table) {
            $table->renameColumn('effect_fixed_flag', 'is_effect_fixed');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('soul_user_effects', function (Blueprint $table) {
            $table->renameColumn('is_effect_fixed', 'effect_fixed_flag');
        });
        Schema::table('heirloom_user_levels', function (Blueprint $table) {
            $table->renameColumn('is_locked', 'lock');
            $table->renameColumn('is_submitted', 'submission_status');
        });
        Schema::table('soul_users', function (Blueprint $table) {
            $table->renameColumn('is_locked', 'lock');
        });
    }
};
