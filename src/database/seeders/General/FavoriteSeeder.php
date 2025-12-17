<?php

namespace Database\Seeders\General;

use App\Models\General\General;
use App\Models\User;
use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();
        $general = General::where('name', '織田信長')->first();
        if ($user && $general) {
            $user->favorites()->syncWithoutDetaching($general->id);
        }
    }
}
