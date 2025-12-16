<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\Illustration;

class IllustrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: スクレイピング後に追加
        Illustration::create(['illustration' => '獅子猿']);
    }
}
