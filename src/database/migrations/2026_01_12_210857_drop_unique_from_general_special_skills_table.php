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
        Schema::table('general_special_skills', function (Blueprint $table) {
            // 依存している外部キー制約を一旦削除
            $table->dropForeign(['general_id']);
            $table->dropForeign(['special_skill_id']);

            // ユニーク制約を削除
            $table->dropUnique('general_special_skill_unique');

            // 外部キー制約を再設定
            $table->foreign('general_id')->references('id')->on('generals');
            $table->foreign('special_skill_id')->references('id')->on('special_skills');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('general_special_skills', function (Blueprint $table) {
            $table->dropForeign(['general_id']);
            $table->dropForeign(['special_skill_id']);

            $table->unique(['general_id', 'special_skill_id'], 'general_special_skill_unique');

            $table->foreign('general_id')->references('id')->on('generals');
            $table->foreign('special_skill_id')->references('id')->on('special_skills');
        });
    }
};
