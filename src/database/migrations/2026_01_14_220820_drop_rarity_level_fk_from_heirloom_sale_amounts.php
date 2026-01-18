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
        Schema::table('rarity_level_heirloom_sale_amounts', function (Blueprint $table) {
            // ユニーク削除のためにFKも削除
            $table->dropForeign('rlhsa_rarity_foreign');
            $table->dropForeign('rlhsa_level_foreign');
            $table->dropForeign('rlhsa_hsa_foreign');
            // ユニーク削除
            $table->dropUnique('rarity_level_heirloom_sale_amount_unique');
            $table->dropColumn('level_id');
            // FK再設定
            $table->foreign('rarity_id', 'rhsa_rarity_foreign')->references('id')->on('rarities');
            $table->foreign('heirloom_sale_amount_id', 'rhsa_hsa_foreign')->references('id')->on('heirloom_sale_amounts');
            // ユニーク再設定
            $table->unique(['rarity_id', 'heirloom_sale_amount_id'], 'rarity_heirloom_sale_amount_unique');
        });

        Schema::table('heirlooms', function (Blueprint $table) {
            $table->dropForeign('heirlooms_rarity_level_heirloom_sale_amount_id_foreign');
            $table->renameColumn('rarity_level_heirloom_sale_amount_id', 'rarity_heirloom_sale_amount_id');
            $table->foreign('rarity_heirloom_sale_amount_id', 'heirlooms_rarity_heirloom_sale_amount_id_foreign')
                ->references('id')->on('rarity_level_heirloom_sale_amounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('heirlooms', function (Blueprint $table) {
            $table->dropForeign('heirlooms_rarity_heirloom_sale_amount_id_foreign');
            $table->renameColumn('rarity_heirloom_sale_amount_id', 'rarity_level_heirloom_sale_amount_id');
            $table->foreign('rarity_level_heirloom_sale_amount_id', 'heirlooms_rarity_level_heirloom_sale_amount_id_foreign')
                ->references('id')->on('rarity_level_heirloom_sale_amounts');
        });

        Schema::table('rarity_level_heirloom_sale_amounts', function (Blueprint $table) {
            // ユニーク削除のためにFKも削除
            $table->dropForeign('rhsa_rarity_foreign');
            $table->dropForeign('rhsa_hsa_foreign');

            // level_idカラム再追加
            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id', 'rlhsa_level_foreign')
                ->references('id')->on('levels');

            // 元のユニークを復元
            $table->dropUnique('rarity_heirloom_sale_amount_unique');
            $table->unique(['rarity_id', 'level_id', 'heirloom_sale_amount_id'], 'rarity_level_heirloom_sale_amount_unique');

            // FK再設定
            $table->foreign('rarity_id', 'rlhsa_rarity_foreign')
                ->references('id')->on('rarities');
            $table->foreign('heirloom_sale_amount_id', 'rlhsa_hsa_foreign')
                ->references('id')->on('heirloom_sale_amounts');
        });
    }
};
