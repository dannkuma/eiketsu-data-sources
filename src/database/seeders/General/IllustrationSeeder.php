<?php

namespace Database\Seeders\General;

use App\Models\General\Illustration;
use Illuminate\Database\Seeder;

class IllustrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: スクレイピング後に追加
        Illustration::updateOrCreate(
            ['illustration' => '獅子猿'],
            ['illustration' => '獅子猿']
        );
    }
}
