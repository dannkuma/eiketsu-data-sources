<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\General\General;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('favorites')->insert([
            'user_id' => User::where('email', 'test@example.com')->value('id'),
            'general_id' => General::where('name', '織田信長')->value('id'),
        ]);
    }
}
