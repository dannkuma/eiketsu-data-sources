<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('rarity_level_heirloom_sale_amounts', 'rarity_heirloom_sale_amounts');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('rarity_heirloom_sale_amounts', 'rarity_level_heirloom_sale_amounts');
    }
};
