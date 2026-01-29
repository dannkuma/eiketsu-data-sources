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
        Schema::table('heirlooms', function (Blueprint $table) {
            // FK削除
            $table->dropForeign('heirlooms_rarity_heirloom_purchase_amount_id_foreign');
            $table->dropForeign('heirlooms_rarity_heirloom_sale_amount_id_foreign');
            $table->dropForeign('heirlooms_rarity_level_heirloom_upgrading_amount_id_foreign');

            // カラム削除
            $table->dropColumn('rarity_heirloom_purchase_amount_id');
            $table->dropColumn('rarity_heirloom_sale_amount_id');
            $table->dropColumn('rarity_level_heirloom_upgrading_amount_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('heirlooms', function (Blueprint $table) {
            // カラムを再追加
            $table->unsignedBigInteger('rarity_heirloom_purchase_amount_id');
            $table->unsignedBigInteger('rarity_heirloom_sale_amount_id');
            $table->unsignedBigInteger('rarity_level_heirloom_upgrading_amount_id');

            // FK再設定（明示的な名前指定のためforeign()を使用）
            $table->foreign('rarity_heirloom_purchase_amount_id', 'heirlooms_rarity_heirloom_purchase_amount_id_foreign')
                ->references('id')->on('heirloom_rarity_heirloom_purchase_amounts');
            $table->foreign('rarity_heirloom_sale_amount_id', 'heirlooms_rarity_heirloom_sale_amount_id_foreign')
                ->references('id')->on('heirloom_rarity_heirloom_sale_amounts');
            $table->foreign('rarity_level_heirloom_upgrading_amount_id', 'heirlooms_rarity_level_heirloom_upgrading_amount_id_foreign')
                ->references('id')->on('heirloom_rarity_level_heirloom_upgrading_amounts');
        });
    }
};
