<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('generals', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_ja_0900_as_cs')->nullable()->change();
            $table->unsignedBigInteger('strategy_name_furigana_id')->nullable()->change();
        });
        Schema::table('strategy_name_furiganas', function (Blueprint $table) {
            $table->string('strategy_name_furigana')->collation('utf8mb4_ja_0900_as_cs')->nullable()->change();
        });
        Schema::table('heirlooms', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_ja_0900_as_cs')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 計略名フリガナIDにNULLが残っていないかチェックする
        $nullForeignKeyCount = DB::table('generals')->whereNull('strategy_name_furigana_id')->count();
        if ($nullForeignKeyCount > 0) {
            throw new \Exception("ロールバックできません: 'generals' テーブルに 'strategy_name_furigana_id' が NULL のレコードが {$nullForeignKeyCount} 件存在します。ロールバックする前に、これらのレコードを有効なIDに手動で紐付けてください。");
        }

        // 文字列カラムのNULLを空文字に更新する
        DB::table('generals')->whereNull('name_furigana')->update(['name_furigana' => '']);
        DB::table('strategy_name_furiganas')->whereNull('strategy_name_furigana')->update(['strategy_name_furigana' => '']);
        DB::table('heirlooms')->whereNull('name_furigana')->update(['name_furigana' => '']);

        // スキーマ変更 (NOT NULLに戻す)
        Schema::table('generals', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_ja_0900_as_cs')->nullable(false)->change();
            $table->unsignedBigInteger('strategy_name_furigana_id')->nullable(false)->change();
        });

        Schema::table('strategy_name_furiganas', function (Blueprint $table) {
            $table->string('strategy_name_furigana')->collation('utf8mb4_ja_0900_as_cs')->nullable(false)->change();
        });

        Schema::table('heirlooms', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_ja_0900_as_cs')->nullable(false)->change();
        });
    }
};
