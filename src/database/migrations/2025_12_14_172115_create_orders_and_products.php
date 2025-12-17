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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('stripe_price_id')->unique();
            $table->integer('price')->unique();
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('price_id')->constrained();
            $table->string('stripe_product_id')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->timestamps();
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropColumn('product_id');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['price_id']);
            $table->dropUnique(['stripe_product_id']);
        });
        Schema::dropIfExists('products');
        Schema::table('prices', function (Blueprint $table) {
            $table->dropUnique(['stripe_price_id']);
            $table->dropUnique(['price']);
        });
        Schema::dropIfExists('prices');
    }
};
