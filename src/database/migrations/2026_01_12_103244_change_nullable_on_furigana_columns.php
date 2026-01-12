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
        // NULLデータが存在する場合に備えて、NOT NULL制約を戻す前に空文字等でデータを埋める
        DB::table('generals')
            ->whereNull('name_furigana')
            ->update(['name_furigana' => '']);

        Schema::table('generals', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_ja_0900_as_cs')->nullable(false)->change();
        });

        DB::table('strategy_name_furiganas')
            ->whereNull('strategy_name_furigana')
            ->update(['strategy_name_furigana' => '']);

        Schema::table('strategy_name_furiganas', function (Blueprint $table) {
            $table->string('strategy_name_furigana')->collation('utf8mb4_ja_0900_as_cs')->nullable(false)->change();
        });

        DB::table('heirlooms')
            ->whereNull('name_furigana')
            ->update(['name_furigana' => '']);

        Schema::table('heirlooms', function (Blueprint $table) {
            $table->string('name_furigana')->collation('utf8mb4_ja_0900_as_cs')->nullable(false)->change();
        });
    }
};
