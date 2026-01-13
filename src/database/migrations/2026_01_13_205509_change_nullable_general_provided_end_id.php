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
        Schema::table('general_get_methods', function (Blueprint $table) {
            $table->unsignedBigInteger('general_provided_end_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('general_get_methods', function (Blueprint $table) {
            $table->unsignedBigInteger('general_provided_end_id')->nullable(false)->change();
        });
    }
};
