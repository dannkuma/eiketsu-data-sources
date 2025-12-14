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
        Schema::create('heirloom_user_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('heirloom_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('level_id')->constrained();
            $table->boolean('lock')->default(false);
            $table->boolean('submission_status')->default(false);
            $table->foreignId('soul_user_id')->unique()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('heirloom_user_levels', function (Blueprint $table) {
            $table->dropForeign(['heirloom_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['level_id']);
            $table->dropForeign(['soul_user_id']);
            $table->dropUnique(['soul_user_id']);
        });
        Schema::dropIfExists('heirloom_user_levels');
    }
};
