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
        Schema::table('users', function (Blueprint $table) {
            DB::statement('ALTER TABLE users MODIFY COLUMN password VARCHAR(255) NOT NULL AFTER name');
            DB::statement('ALTER TABLE users MODIFY COLUMN remember_token VARCHAR(255) AFTER email_verified_at');
            $table->string('login_id')->after('name');
            $table->integer('balance')->after('password')->default(0);
            $table->integer('heirloom_effect_fixed_ticket')->after('balance')->default(0);
            $table->tinyInteger('is_admin')->after('trial_ends_at')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['login_id', 'balance', 'heirloom_effect_fixed_ticket', 'is_admin']);
            DB::statement('ALTER TABLE users MODIFY COLUMN password VARCHAR(255) NOT NULL AFTER email_verified_at');
            DB::statement('ALTER TABLE users MODIFY COLUMN remember_token VARCHAR(100) NULL AFTER password');
        });
    }
};
