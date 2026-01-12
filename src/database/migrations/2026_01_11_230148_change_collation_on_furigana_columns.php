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
        // TODO: 照合順序の変更に伴い、日本語の文字列の検索が適切に行えるか、検索機能の実装時に確認を実施する
        Schema::table('generals', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_ja_0900_as_cs')->change();
        });
        Schema::table('strategy_name_furiganas', function (Blueprint $table) {
            $table->string('strategy_name_furigana')->collation('utf8mb4_ja_0900_as_cs')->change();
        });
        Schema::table('heirlooms', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_ja_0900_as_cs')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('heirlooms', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_unicode_ci')->change();
        });
        Schema::table('strategy_name_furiganas', function (Blueprint $table) {
            $table->string('strategy_name_furigana')->collation('utf8mb4_unicode_ci')->change();
        });
        Schema::table('generals', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_unicode_ci')->change();
        });
    }
};
