<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\General\General;

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
            $user->favorites()->attach($general->id);
        }
    }
}