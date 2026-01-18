<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 戦器レアリティ戦器購入額テーブルのインデックス再作成
        Schema::table('heirloom_rarity_heirloom_purchase_amounts', function ($table) {
            // 古いインデックス削除
            $table->dropForeign('rhpa_rarity_foreign');
            $table->dropForeign('rhpa_hpa_foreign');
            // 古いユニーク削除
            $table->dropUnique('rarity_heirloom_purchase_amount_unique');
            // 戦器IDカラム追加、インデックス作成
            $table->foreignId('heirloom_id')->after('heirloom_purchase_amount_id')->constrained(table: 'heirlooms', indexName: 'hrhpa_heirloom_foreign');
            // レアリティインデックス再作成
            $table->foreign('rarity_id', 'hrhpa_rarity_foreign')->references('id')->on('rarities');
            // 戦器購入額インデックス再作成
            $table->foreign('heirloom_purchase_amount_id', 'hrhpa_hpa_foreign')->references('id')->on('heirloom_purchase_amounts');
            // ユニーク再作成
            $table->unique(['rarity_id', 'heirloom_purchase_amount_id', 'heirloom_id'], 'heirloom_rarity_heirloom_purchase_amount_unique');
        });

        // 戦器レアリティ戦器売却額テーブルのインデックス再作成
        Schema::table('heirloom_rarity_heirloom_sale_amounts', function ($table) {
            // 古いインデックス削除
            $table->dropForeign('rhsa_rarity_foreign');
            $table->dropForeign('rhsa_hsa_foreign');
            // 古いユニーク削除
            $table->dropUnique('rarity_heirloom_sale_amount_unique');
            // 戦器IDカラム追加、インデックス作成
            $table->foreignId('heirloom_id')->after('heirloom_sale_amount_id')->constrained(table: 'heirlooms', indexName: 'hrhsa_heirloom_foreign');
            // レアリティインデックス再作成
            $table->foreign('rarity_id', 'hrhsa_rarity_foreign')->references('id')->on('rarities');
            // 戦器売却額インデックス再作成
            $table->foreign('heirloom_sale_amount_id', 'hrhsa_hsa_foreign')->references('id')->on('heirloom_sale_amounts');
            // ユニーク再作成
            $table->unique(['rarity_id', 'heirloom_sale_amount_id', 'heirloom_id'], 'heirloom_rarity_heirloom_sale_amount_unique');
        });

        // 戦器レアリティ戦器強化額テーブルのインデックス再作成
        Schema::table('heirloom_rarity_level_heirloom_upgrading_amounts', function ($table) {
            // 古いインデックス削除
            $table->dropForeign('rlhua_rarity_foreign');
            $table->dropForeign('rlhua_level_foreign');
            $table->dropForeign('rlhua_hua_foreign');
            // 古いユニーク削除
            $table->dropUnique('rarity_level_heirloom_upgrading_amount_unique');
            // 戦器IDカラム追加、インデックス作成
            $table->foreignId('heirloom_id')->after('heirloom_upgrading_amount_id')->constrained(table: 'heirlooms', indexName: 'hrlhua_heirloom_foreign');
            // レアリティインデックス再作成
            $table->foreign('rarity_id', 'hrlhua_rarity_foreign')->references('id')->on('rarities');
            // レベルインデックス再作成
            $table->foreign('level_id', 'hrlhua_level_foreign')->references('id')->on('levels');
            // 戦器強化額インデックス再作成
            $table->foreign('heirloom_upgrading_amount_id', 'hrlhua_hua_foreign')->references('id')->on('heirloom_upgrading_amounts');
            // ユニーク再作成
            $table->unique(['rarity_id', 'level_id', 'heirloom_upgrading_amount_id', 'heirloom_id'], 'heirloom_rarity_level_heirloom_upgrading_amount_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('heirloom_rarity_level_heirloom_upgrading_amounts', function ($table) {
            // 新しいインデックス削除
            $table->dropForeign('hrlhua_rarity_foreign');
            $table->dropForeign('hrlhua_level_foreign');
            $table->dropForeign('hrlhua_hua_foreign');
            // 新しいユニーク削除
            $table->dropUnique('heirloom_rarity_level_heirloom_upgrading_amount_unique');
            // 戦器IDカラム削除
            $table->dropColumn('heirloom_id');
            // 古いインデックス再作成
            $table->foreign('rarity_id', 'rlhua_rarity_foreign')->references('id')->on('rarities');
            $table->foreign('level_id', 'rlhua_level_foreign')->references('id')->on('levels');
            $table->foreign('heirloom_upgrading_amount_id', 'rlhua_hua_foreign')->references('id')->on('heirloom_upgrading_amounts');
            $table->unique(['rarity_id', 'level_id', 'heirloom_upgrading_amount_id'], 'rarity_level_heirloom_upgrading_amount_unique');
        });
        Schema::table('heirloom_rarity_heirloom_sale_amounts', function ($table) {
            // 新しいインデックス削除
            $table->dropForeign('hrhsa_heirloom_foreign');
            $table->dropForeign('hrhsa_hsa_foreign');
            $table->dropForeign('hrhsa_rarity_foreign');
            // 新しいユニーク削除
            $table->dropUnique('heirloom_rarity_heirloom_sale_amount_unique');
            // 戦器IDカラム削除
            $table->dropColumn('heirloom_id');
            // 古いインデックス再作成
            $table->foreign('rarity_id', 'rhsa_rarity_foreign')->references('id')->on('rarities');
            $table->foreign('heirloom_sale_amount_id', 'rhsa_hsa_foreign')->references('id')->on('heirloom_sale_amounts');
            $table->unique(['rarity_id', 'heirloom_sale_amount_id'], 'rarity_heirloom_sale_amount_unique');
        });
        Schema::table('heirloom_rarity_heirloom_purchase_amounts', function ($table) {
            // 新しいインデックス削除
            $table->dropForeign('hrhpa_rarity_foreign');
            $table->dropForeign('hrhpa_hpa_foreign');
            $table->dropForeign('hrhpa_heirloom_foreign');
            // 新しいユニーク削除
            $table->dropUnique('heirloom_rarity_heirloom_purchase_amount_unique');
            // 戦器IDカラム削除
            $table->dropColumn('heirloom_id');
            // 古いインデックス再作成
            $table->foreign('rarity_id', 'rhpa_rarity_foreign')->references('id')->on('rarities');
            $table->foreign('heirloom_purchase_amount_id', 'rhpa_hpa_foreign')->references('id')->on('heirloom_purchase_amounts');
            $table->unique(['rarity_id', 'heirloom_purchase_amount_id'], 'rarity_heirloom_purchase_amount_unique');
        });
    }
};
