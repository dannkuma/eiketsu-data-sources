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
        Schema::table('heirloom_effects', function (Blueprint $table) {
            $table->unsignedBigInteger('heirloom_effect_operator_id')->nullable()->change();
            $table->unsignedBigInteger('heirloom_value_id')->nullable()->change();
            $table->unsignedBigInteger('heirloom_effect_unit_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('heirloom_effects', function (Blueprint $table) {
            $table->unsignedBigInteger('heirloom_effect_operator_id')->nullable(false)->change();
            $table->unsignedBigInteger('heirloom_value_id')->nullable(false)->change();
            $table->unsignedBigInteger('heirloom_effect_unit_id')->nullable(false)->change();
        });
    }
};
