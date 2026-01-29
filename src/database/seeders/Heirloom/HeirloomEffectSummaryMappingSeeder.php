<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomEffectSummaryMapping;
use Illuminate\Database\Seeder;

class HeirloomEffectSummaryMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloomEffectSummaryMappings = [
            [   // 素焼
                'heirloom_effect_summary_id' => 1,
                'heirloom_effect_detail_id' => 1,
                'level_id' => 1,
            ],
            [   // 美濃焼 main Level1
                'heirloom_effect_summary_id' => 2,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 1,
            ],
            [   // 美濃焼 main Level2
                'heirloom_effect_summary_id' => 2,
                'heirloom_effect_detail_id' => 3,
                'level_id' => 2,
            ],
            [   // 美濃焼 main Level3
                'heirloom_effect_summary_id' => 2,
                'heirloom_effect_detail_id' => 4,
                'level_id' => 3,
            ],
            [   // 美濃焼 sub Level1
                'heirloom_effect_summary_id' => 3,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 1,
            ],
            [   // 美濃焼 sub Level2
                'heirloom_effect_summary_id' => 3,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 2,
            ],
            [   // 美濃焼 sub Level3
                'heirloom_effect_summary_id' => 3,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 3,
            ],
            [   // 赤楽茶碗 main Level1
                'heirloom_effect_summary_id' => 4,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 1,
            ],
            [   // 赤楽茶碗 main Level2
                'heirloom_effect_summary_id' => 4,
                'heirloom_effect_detail_id' => 3,
                'level_id' => 2,
            ],
            [   // 赤楽茶碗 main Level3
                'heirloom_effect_summary_id' => 4,
                'heirloom_effect_detail_id' => 4,
                'level_id' => 3,
            ],
            [   // 赤楽茶碗 sub Level1
                'heirloom_effect_summary_id' => 5,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 1,
            ],
            [   // 赤楽茶碗 sub Level2
                'heirloom_effect_summary_id' => 5,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 2,
            ],
            [   // 赤楽茶碗 sub Level3
                'heirloom_effect_summary_id' => 5,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 3,
            ],
            [   // 緑釉壺 main Level1
                'heirloom_effect_summary_id' => 6,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 1,
            ],
            [   // 緑釉壺 main Level2
                'heirloom_effect_summary_id' => 6,
                'heirloom_effect_detail_id' => 3,
                'level_id' => 2,
            ],
            [   // 緑釉壺 main Level3
                'heirloom_effect_summary_id' => 6,
                'heirloom_effect_detail_id' => 4,
                'level_id' => 3,
            ],
            [   // 緑釉壺 sub Level1
                'heirloom_effect_summary_id' => 7,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 1,
            ],
            [   // 緑釉壺 sub Level2
                'heirloom_effect_summary_id' => 7,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 2,
            ],
            [   // 緑釉壺 sub Level3
                'heirloom_effect_summary_id' => 7,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 3,
            ],
            [   // 唐物肩衝 main Level1
                'heirloom_effect_summary_id' => 8,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 1,
            ],
            [   // 唐物肩衝 main Level2
                'heirloom_effect_summary_id' => 8,
                'heirloom_effect_detail_id' => 3,
                'level_id' => 2,
            ],
            [   // 唐物肩衝 main Level3
                'heirloom_effect_summary_id' => 8,
                'heirloom_effect_detail_id' => 4,
                'level_id' => 3,
            ],
            [   // 唐物肩衝 sub Level1
                'heirloom_effect_summary_id' => 9,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 1,
            ],
            [   // 唐物肩衝 sub Level2
                'heirloom_effect_summary_id' => 9,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 2,
            ],
            [   // 唐物肩衝 sub Level3
                'heirloom_effect_summary_id' => 9,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 3,
            ],
            [   // 紫砂壺 main Level1
                'heirloom_effect_summary_id' => 10,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 1,
            ],
            [   // 紫砂壺 main Level2
                'heirloom_effect_summary_id' => 10,
                'heirloom_effect_detail_id' => 3,
                'level_id' => 2,
            ],
            [   // 紫砂壺 main Level3
                'heirloom_effect_summary_id' => 10,
                'heirloom_effect_detail_id' => 4,
                'level_id' => 3,
            ],
            [   // 紫砂壺 sub Level1
                'heirloom_effect_summary_id' => 11,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 1,
            ],
            [   // 紫砂壺 sub Level2
                'heirloom_effect_summary_id' => 11,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 2,
            ],
            [   // 紫砂壺 sub Level3
                'heirloom_effect_summary_id' => 11,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 3,
            ],
            [   // 井戸茶碗 main Level1
                'heirloom_effect_summary_id' => 12,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 1,
            ],
            [   // 井戸茶碗 main Level2
                'heirloom_effect_summary_id' => 12,
                'heirloom_effect_detail_id' => 3,
                'level_id' => 2,
            ],
            [   // 井戸茶碗 main Level3
                'heirloom_effect_summary_id' => 12,
                'heirloom_effect_detail_id' => 4,
                'level_id' => 3,
            ],
            [   // 井戸茶碗 sub Level1
                'heirloom_effect_summary_id' => 13,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 1,
            ],
            [   // 井戸茶碗 sub Level2
                'heirloom_effect_summary_id' => 13,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 2,
            ],
            [   // 井戸茶碗 sub Level3
                'heirloom_effect_summary_id' => 13,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 3,
            ],
            [   // 黄瀬戸鉢 main Level1
                'heirloom_effect_summary_id' => 14,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 1,
            ],
            [   // 黄瀬戸鉢 main Level2
                'heirloom_effect_summary_id' => 14,
                'heirloom_effect_detail_id' => 3,
                'level_id' => 2,
            ],
            [   // 黄瀬戸鉢 main Level3
                'heirloom_effect_summary_id' => 14,
                'heirloom_effect_detail_id' => 4,
                'level_id' => 3,
            ],
            [   // 黄瀬戸鉢 sub Level1
                'heirloom_effect_summary_id' => 15,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 1,
            ],
            [   // 黄瀬戸鉢 sub Level2
                'heirloom_effect_summary_id' => 15,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 2,
            ],
            [   // 黄瀬戸鉢 sub Level3
                'heirloom_effect_summary_id' => 15,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 3,
            ],
            [   // 曜変天目茶碗 main Level1
                'heirloom_effect_summary_id' => 16,
                'heirloom_effect_detail_id' => 1,
                'level_id' => 1,
            ],
            [   // 曜変天目茶碗 main Level2
                'heirloom_effect_summary_id' => 16,
                'heirloom_effect_detail_id' => 6,
                'level_id' => 2,
            ],
            [   // 曜変天目茶碗 main Level3
                'heirloom_effect_summary_id' => 16,
                'heirloom_effect_detail_id' => 7,
                'level_id' => 3,
            ],
            [   // 曜変天目茶碗 main Level4
                'heirloom_effect_summary_id' => 16,
                'heirloom_effect_detail_id' => 8,
                'level_id' => 4,
            ],
            [   // 曜変天目茶碗 main Level5
                'heirloom_effect_summary_id' => 16,
                'heirloom_effect_detail_id' => 9,
                'level_id' => 5,
            ],
            [   // 曜変天目茶碗 sub Level1
                'heirloom_effect_summary_id' => 17,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 1,
            ],
            [   // 曜変天目茶碗 sub Level2
                'heirloom_effect_summary_id' => 17,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 2,
            ],
            [   // 曜変天目茶碗 sub Level3
                'heirloom_effect_summary_id' => 17,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 3,
            ],
            [   // 曜変天目茶碗 sub Level4
                'heirloom_effect_summary_id' => 17,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 4,
            ],
            [   // 曜変天目茶碗 sub Level5
                'heirloom_effect_summary_id' => 17,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 5,
            ],
            [   // 六壬式盤 main Level1
                'heirloom_effect_summary_id' => 18,
                'heirloom_effect_detail_id' => 11,
                'level_id' => 1,
            ],
            [   // 六壬式盤 main Level2
                'heirloom_effect_summary_id' => 18,
                'heirloom_effect_detail_id' => 1,
                'level_id' => 2,
            ],
            [   // 六壬式盤 main Level3
                'heirloom_effect_summary_id' => 18,
                'heirloom_effect_detail_id' => 6,
                'level_id' => 3,
            ],
            [   // 六壬式盤 main Level4
                'heirloom_effect_summary_id' => 18,
                'heirloom_effect_detail_id' => 7,
                'level_id' => 4,
            ],
            [   // 六壬式盤 main Level5
                'heirloom_effect_summary_id' => 18,
                'heirloom_effect_detail_id' => 8,
                'level_id' => 5,
            ],
            [   // 六壬式盤 sub Level1
                'heirloom_effect_summary_id' => 19,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 1,
            ],
            [   // 六壬式盤 sub Level2
                'heirloom_effect_summary_id' => 19,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 2,
            ],
            [   // 六壬式盤 sub Level3
                'heirloom_effect_summary_id' => 19,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 3,
            ],
            [   // 六壬式盤 sub Level4
                'heirloom_effect_summary_id' => 19,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 4,
            ],
            [   // 六壬式盤 sub Level5
                'heirloom_effect_summary_id' => 19,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 5,
            ],
            [   // 九鼎 main Level1
                'heirloom_effect_summary_id' => 20,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 1,
            ],
            [   // 九鼎 main Level2
                'heirloom_effect_summary_id' => 20,
                'heirloom_effect_detail_id' => 3,
                'level_id' => 2,
            ],
            [   // 九鼎 main Level3
                'heirloom_effect_summary_id' => 20,
                'heirloom_effect_detail_id' => 4,
                'level_id' => 3,
            ],
            [   // 九鼎 main Level4
                'heirloom_effect_summary_id' => 20,
                'heirloom_effect_detail_id' => 11,
                'level_id' => 4,
            ],
            [   // 九鼎 main Level5
                'heirloom_effect_summary_id' => 20,
                'heirloom_effect_detail_id' => 1,
                'level_id' => 5,
            ],
            [   // 九鼎 sub Level1
                'heirloom_effect_summary_id' => 21,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 1,
            ],
            [   // 九鼎 sub Level2
                'heirloom_effect_summary_id' => 21,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 2,
            ],
            [   // 九鼎 sub Level3
                'heirloom_effect_summary_id' => 21,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 3,
            ],
            [   // 九鼎 sub Level4
                'heirloom_effect_summary_id' => 21,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 4,
            ],
            [   // 九鼎 sub Level5
                'heirloom_effect_summary_id' => 21,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 5,
            ],
            [   // 無限の魔法石 main Level1
                'heirloom_effect_summary_id' => 22,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 1,
            ],
            [   // 無限の魔法石 main Level2
                'heirloom_effect_summary_id' => 22,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 2,
            ],
            [   // 無限の魔法石 main Level3
                'heirloom_effect_summary_id' => 22,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 3,
            ],
            [   // 無限の魔法石 main Level4
                'heirloom_effect_summary_id' => 22,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 4,
            ],
            [   // 無限の魔法石 main Level5
                'heirloom_effect_summary_id' => 22,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 5,
            ],
            [   // 無限の魔法石 sub Level1
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 15,
                'level_id' => 1,
            ],
            [   // 無限の魔法石 sub Level2
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 16,
                'level_id' => 2,
            ],
            [   // 無限の魔法石 sub Level3
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 16,
                'level_id' => 3,
            ],
            [   // 無限の魔法石 sub Level4
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 16,
                'level_id' => 4,
            ],
            [   // 無限の魔法石 sub Level5
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 16,
                'level_id' => 5,
            ],
            [   // 無限の魔法石 detail Level1
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 無限の魔法石 detail Level2
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 2,
            ],
            [   // 無限の魔法石 detail Level3
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 3,
            ],
            [   // 無限の魔法石 detail Level4
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 4,
            ],
            [   // 無限の魔法石 detail Level5
                'heirloom_effect_summary_id' => 23,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 5,
            ],
            [   // 和氏の璧 main Level1
                'heirloom_effect_summary_id' => 24,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 1,
            ],
            [   // 和氏の璧 main Level2
                'heirloom_effect_summary_id' => 24,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 2,
            ],
            [   // 和氏の璧 main Level3
                'heirloom_effect_summary_id' => 24,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 3,
            ],
            [   // 和氏の璧 main Level4
                'heirloom_effect_summary_id' => 24,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 4,
            ],
            [   // 和氏の璧 main Level5
                'heirloom_effect_summary_id' => 24,
                'heirloom_effect_detail_id' => 14,
                'level_id' => 5,
            ],
            [   // 和氏の璧 sub Level1
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 18,
                'level_id' => 1,
            ],
            [   // 和氏の璧 sub Level2
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 19,
                'level_id' => 2,
            ],
            [   // 和氏の璧 sub Level3
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 19,
                'level_id' => 3,
            ],
            [   // 和氏の璧 sub Level4
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 19,
                'level_id' => 4,
            ],
            [   // 和氏の璧 sub Level5
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 19,
                'level_id' => 5,
            ],
            [   // 和氏の璧 detail Level1
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 和氏の璧 detail Level2
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 2,
            ],
            [   // 和氏の璧 detail Level3
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 3,
            ],
            [   // 和氏の璧 detail Level4
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 4,
            ],
            [   // 和氏の璧 detail Level5
                'heirloom_effect_summary_id' => 25,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 5,
            ],
            [   // 百貫茄子 main Level1
                'heirloom_effect_summary_id' => 26,
                'heirloom_effect_detail_id' => 21,
                'level_id' => 1,
            ],
            [   // 百貫茄子 main Level2
                'heirloom_effect_summary_id' => 26,
                'heirloom_effect_detail_id' => 22,
                'level_id' => 2,
            ],
            [   // 百貫茄子 main Level3
                'heirloom_effect_summary_id' => 26,
                'heirloom_effect_detail_id' => 23,
                'level_id' => 3,
            ],
            [   // 百貫茄子 main Level4
                'heirloom_effect_summary_id' => 26,
                'heirloom_effect_detail_id' => 24,
                'level_id' => 4,
            ],
            [   // 百貫茄子 main Level5
                'heirloom_effect_summary_id' => 26,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 5,
            ],
            [   // 百貫茄子 sub Level1
                'heirloom_effect_summary_id' => 27,
                'heirloom_effect_detail_id' => 25,
                'level_id' => 1,
            ],
            [   // 百貫茄子 sub Level2
                'heirloom_effect_summary_id' => 27,
                'heirloom_effect_detail_id' => 25,
                'level_id' => 2,
            ],
            [   // 百貫茄子 sub Level3
                'heirloom_effect_summary_id' => 27,
                'heirloom_effect_detail_id' => 25,
                'level_id' => 3,
            ],
            [   // 百貫茄子 sub Level4
                'heirloom_effect_summary_id' => 27,
                'heirloom_effect_detail_id' => 25,
                'level_id' => 4,
            ],
            [   // 百貫茄子 sub Level5
                'heirloom_effect_summary_id' => 27,
                'heirloom_effect_detail_id' => 25,
                'level_id' => 5,
            ],
            [   // 玉璽 main Level1
                'heirloom_effect_summary_id' => 28,
                'heirloom_effect_detail_id' => 21,
                'level_id' => 1,
            ],
            [   // 玉璽 main Level2
                'heirloom_effect_summary_id' => 28,
                'heirloom_effect_detail_id' => 22,
                'level_id' => 2,
            ],
            [   // 玉璽 main Level3
                'heirloom_effect_summary_id' => 28,
                'heirloom_effect_detail_id' => 23,
                'level_id' => 3,
            ],
            [   // 玉璽 main Level4
                'heirloom_effect_summary_id' => 28,
                'heirloom_effect_detail_id' => 24,
                'level_id' => 4,
            ],
            [   // 玉璽 main Level5
                'heirloom_effect_summary_id' => 28,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 5,
            ],
            [   // 玉璽 sub Level1
                'heirloom_effect_summary_id' => 29,
                'heirloom_effect_detail_id' => 21,
                'level_id' => 1,
            ],
            [   // 玉璽 sub Level2
                'heirloom_effect_summary_id' => 29,
                'heirloom_effect_detail_id' => 22,
                'level_id' => 2,
            ],
            [   // 玉璽 sub Level3
                'heirloom_effect_summary_id' => 29,
                'heirloom_effect_detail_id' => 23,
                'level_id' => 3,
            ],
            [   // 玉璽 sub Level4
                'heirloom_effect_summary_id' => 29,
                'heirloom_effect_detail_id' => 24,
                'level_id' => 4,
            ],
            [   // 玉璽 sub Level5
                'heirloom_effect_summary_id' => 29,
                'heirloom_effect_detail_id' => 2,
                'level_id' => 5,
            ],
            [   // 平蜘蛛釜 main Level1
                'heirloom_effect_summary_id' => 30,
                'heirloom_effect_detail_id' => 1,
                'level_id' => 1,
            ],
            [   // 平蜘蛛釜 main Level2
                'heirloom_effect_summary_id' => 30,
                'heirloom_effect_detail_id' => 6,
                'level_id' => 2,
            ],
            [   // 平蜘蛛釜 main Level3
                'heirloom_effect_summary_id' => 30,
                'heirloom_effect_detail_id' => 7,
                'level_id' => 3,
            ],
            [   // 平蜘蛛釜 main Level4
                'heirloom_effect_summary_id' => 30,
                'heirloom_effect_detail_id' => 8,
                'level_id' => 4,
            ],
            [   // 平蜘蛛釜 main Level5
                'heirloom_effect_summary_id' => 30,
                'heirloom_effect_detail_id' => 9,
                'level_id' => 5,
            ],
            [   // 平蜘蛛釜 sub Level1
                'heirloom_effect_summary_id' => 31,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // 平蜘蛛釜 sub Level2
                'heirloom_effect_summary_id' => 31,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 2,
            ],
            [   // 平蜘蛛釜 sub Level3
                'heirloom_effect_summary_id' => 31,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 3,
            ],
            [   // 平蜘蛛釜 sub Level4
                'heirloom_effect_summary_id' => 31,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 4,
            ],
            [   // 平蜘蛛釜 sub Level5
                'heirloom_effect_summary_id' => 31,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 5,
            ],
            [   // 短甲
                'heirloom_effect_summary_id' => 32,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 1,
            ],
            [   // 月輪文胴 main Level1
                'heirloom_effect_summary_id' => 33,
                'heirloom_effect_detail_id' => 28,
                'level_id' => 1,
            ],
            [   // 月輪文胴 main Level2
                'heirloom_effect_summary_id' => 33,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 2,
            ],
            [   // 月輪文胴 main Level3
                'heirloom_effect_summary_id' => 33,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 3,
            ],
            [   // 月輪文胴 sub Level1
                'heirloom_effect_summary_id' => 34,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 1,
            ],
            [   // 月輪文胴 sub Level2
                'heirloom_effect_summary_id' => 34,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 2,
            ],
            [   // 月輪文胴 sub Level3
                'heirloom_effect_summary_id' => 34,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 3,
            ],
            [   // 白糸威胴 main Level1
                'heirloom_effect_summary_id' => 35,
                'heirloom_effect_detail_id' => 28,
                'level_id' => 1,
            ],
            [   // 白糸威胴 main Level2
                'heirloom_effect_summary_id' => 35,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 2,
            ],
            [   // 白糸威胴 main Level3
                'heirloom_effect_summary_id' => 35,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 3,
            ],
            [   // 白糸威胴 sub Level1
                'heirloom_effect_summary_id' => 36,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 1,
            ],
            [   // 白糸威胴 sub Level2
                'heirloom_effect_summary_id' => 36,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 2,
            ],
            [   // 白糸威胴 sub Level3
                'heirloom_effect_summary_id' => 36,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 3,
            ],
            [   // 鎖子黄金甲 main Level1
                'heirloom_effect_summary_id' => 37,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 1,
            ],
            [   // 鎖子黄金甲 main Level2
                'heirloom_effect_summary_id' => 37,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 2,
            ],
            [   // 鎖子黄金甲 main Level3
                'heirloom_effect_summary_id' => 37,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 3,
            ],
            [   // 鎖子黄金甲 main Level4
                'heirloom_effect_summary_id' => 37,
                'heirloom_effect_detail_id' => 32,
                'level_id' => 4,
            ],
            [   // 鎖子黄金甲 main Level5
                'heirloom_effect_summary_id' => 37,
                'heirloom_effect_detail_id' => 33,
                'level_id' => 5,
            ],
            [   // 鎖子黄金甲 sub Level1
                'heirloom_effect_summary_id' => 38,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 1,
            ],
            [   // 鎖子黄金甲 sub Level2
                'heirloom_effect_summary_id' => 38,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 2,
            ],
            [   // 鎖子黄金甲 sub Level3
                'heirloom_effect_summary_id' => 38,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 3,
            ],
            [   // 鎖子黄金甲 sub Level4
                'heirloom_effect_summary_id' => 38,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 4,
            ],
            [   // 鎖子黄金甲 sub Level5
                'heirloom_effect_summary_id' => 38,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 5,
            ],
            [   // 黒糸威胴 main Level1
                'heirloom_effect_summary_id' => 39,
                'heirloom_effect_detail_id' => 28,
                'level_id' => 1,
            ],
            [   // 黒糸威胴 main Level2
                'heirloom_effect_summary_id' => 39,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 2,
            ],
            [   // 黒糸威胴 main Level3
                'heirloom_effect_summary_id' => 39,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 3,
            ],
            [   // 黒糸威胴 main Level4
                'heirloom_effect_summary_id' => 39,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 4,
            ],
            [   // 黒糸威胴 main Level5
                'heirloom_effect_summary_id' => 39,
                'heirloom_effect_detail_id' => 31,
                'level_id' => 5,
            ],
            [   // 黒糸威胴 sub Level1
                'heirloom_effect_summary_id' => 40,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 1,
            ],
            [   // 黒糸威胴 sub Level2
                'heirloom_effect_summary_id' => 40,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 2,
            ],
            [   // 黒糸威胴 sub Level3
                'heirloom_effect_summary_id' => 40,
                'heirloom_effect_detail_id' => 34,
                'level_id' => 3,
            ],
            [   // 黒糸威胴 sub Level4
                'heirloom_effect_summary_id' => 40,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 4,
            ],
            [   // 黒糸威胴 sub Level5
                'heirloom_effect_summary_id' => 40,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 5,
            ],
            [   // 朱塗胴 main Level1
                'heirloom_effect_summary_id' => 41,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 1,
            ],
            [   // 朱塗胴 main Level2
                'heirloom_effect_summary_id' => 41,
                'heirloom_effect_detail_id' => 28,
                'level_id' => 2,
            ],
            [   // 朱塗胴 main Level3
                'heirloom_effect_summary_id' => 41,
                'heirloom_effect_detail_id' => 28,
                'level_id' => 3,
            ],
            [   // 朱塗胴 main Level4
                'heirloom_effect_summary_id' => 41,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 4,
            ],
            [   // 朱塗胴 main Level5
                'heirloom_effect_summary_id' => 41,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 5,
            ],
            [   // 朱塗胴 sub Level1
                'heirloom_effect_summary_id' => 42,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 朱塗胴 sub Level2
                'heirloom_effect_summary_id' => 42,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 2,
            ],
            [   // 朱塗胴 sub Level3
                'heirloom_effect_summary_id' => 42,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 朱塗胴 sub Level4
                'heirloom_effect_summary_id' => 42,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 4,
            ],
            [   // 朱塗胴 sub Level5
                'heirloom_effect_summary_id' => 42,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 5,
            ],
            [   // 金溜塗胴 main Level1
                'heirloom_effect_summary_id' => 43,
                'heirloom_effect_detail_id' => 36,
                'level_id' => 1,
            ],
            [   // 金溜塗胴 main Level2
                'heirloom_effect_summary_id' => 43,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 2,
            ],
            [   // 金溜塗胴 main Level3
                'heirloom_effect_summary_id' => 43,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 3,
            ],
            [   // 金溜塗胴 main Level4
                'heirloom_effect_summary_id' => 43,
                'heirloom_effect_detail_id' => 28,
                'level_id' => 4,
            ],
            [   // 金溜塗胴 main Level5
                'heirloom_effect_summary_id' => 43,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 5,
            ],
            [   // 金溜塗胴 sub Level1
                'heirloom_effect_summary_id' => 44,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 1,
            ],
            [   // 金溜塗胴 sub Level2
                'heirloom_effect_summary_id' => 44,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 2,
            ],
            [   // 金溜塗胴 sub Level3
                'heirloom_effect_summary_id' => 44,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 3,
            ],
            [   // 金溜塗胴 sub Level4
                'heirloom_effect_summary_id' => 44,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 4,
            ],
            [   // 金溜塗胴 sub Level5
                'heirloom_effect_summary_id' => 44,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 5,
            ],
            [   // 源太が産衣 main Level1
                'heirloom_effect_summary_id' => 45,
                'heirloom_effect_detail_id' => 36,
                'level_id' => 1,
            ],
            [   // 源太が産衣 main Level2
                'heirloom_effect_summary_id' => 45,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 2,
            ],
            [   // 源太が産衣 main Level3
                'heirloom_effect_summary_id' => 45,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 3,
            ],
            [   // 源太が産衣 main Level4
                'heirloom_effect_summary_id' => 45,
                'heirloom_effect_detail_id' => 28,
                'level_id' => 4,
            ],
            [   // 源太が産衣 main Level5
                'heirloom_effect_summary_id' => 45,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 5,
            ],
            [   // 源太が産衣 sub Level1
                'heirloom_effect_summary_id' => 46,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 1,
            ],
            [   // 源太が産衣 sub Level2
                'heirloom_effect_summary_id' => 46,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 2,
            ],
            [   // 源太が産衣 sub Level3
                'heirloom_effect_summary_id' => 46,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 3,
            ],
            [   // 源太が産衣 sub Level4
                'heirloom_effect_summary_id' => 46,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 4,
            ],
            [   // 源太が産衣 sub Level5
                'heirloom_effect_summary_id' => 46,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 5,
            ],
            [   // 褄取威大鎧 main Level1
                'heirloom_effect_summary_id' => 47,
                'heirloom_effect_detail_id' => 36,
                'level_id' => 1,
            ],
            [   // 褄取威大鎧 main Level2
                'heirloom_effect_summary_id' => 47,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 2,
            ],
            [   // 褄取威大鎧 main Level3
                'heirloom_effect_summary_id' => 47,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 3,
            ],
            [   // 褄取威大鎧 main Level4
                'heirloom_effect_summary_id' => 47,
                'heirloom_effect_detail_id' => 28,
                'level_id' => 4,
            ],
            [   // 褄取威大鎧 main Level5
                'heirloom_effect_summary_id' => 47,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 5,
            ],
            [   // 褄取威大鎧 sub Level1
                'heirloom_effect_summary_id' => 48,
                'heirloom_effect_detail_id' => 37,
                'level_id' => 1,
            ],
            [   // 褄取威大鎧 sub Level2
                'heirloom_effect_summary_id' => 48,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 2,
            ],
            [   // 褄取威大鎧 sub Level3
                'heirloom_effect_summary_id' => 48,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 3,
            ],
            [   // 褄取威大鎧 sub Level4
                'heirloom_effect_summary_id' => 48,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 4,
            ],
            [   // 褄取威大鎧 sub Level5
                'heirloom_effect_summary_id' => 48,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 5,
            ],
            [   // 獣面呑頭鎧 main Level1
                'heirloom_effect_summary_id' => 49,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 1,
            ],
            [   // 獣面呑頭鎧 main Level2
                'heirloom_effect_summary_id' => 49,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 2,
            ],
            [   // 獣面呑頭鎧 main Level3
                'heirloom_effect_summary_id' => 49,
                'heirloom_effect_detail_id' => 31,
                'level_id' => 3,
            ],
            [   // 獣面呑頭鎧 main Level4
                'heirloom_effect_summary_id' => 49,
                'heirloom_effect_detail_id' => 32,
                'level_id' => 4,
            ],
            [   // 獣面呑頭鎧 main Level5
                'heirloom_effect_summary_id' => 49,
                'heirloom_effect_detail_id' => 33,
                'level_id' => 5,
            ],
            [   // 獣面呑頭鎧 sub Level1
                'heirloom_effect_summary_id' => 50,
                'heirloom_effect_detail_id' => 39,
                'level_id' => 1,
            ],
            [   // 獣面呑頭鎧 sub Level2
                'heirloom_effect_summary_id' => 50,
                'heirloom_effect_detail_id' => 39,
                'level_id' => 2,
            ],
            [   // 獣面呑頭鎧 sub Level3
                'heirloom_effect_summary_id' => 50,
                'heirloom_effect_detail_id' => 39,
                'level_id' => 3,
            ],
            [   // 獣面呑頭鎧 sub Level4
                'heirloom_effect_summary_id' => 50,
                'heirloom_effect_detail_id' => 39,
                'level_id' => 4,
            ],
            [   // 獣面呑頭鎧 sub Level5
                'heirloom_effect_summary_id' => 50,
                'heirloom_effect_detail_id' => 39,
                'level_id' => 5,
            ],
            [   // 日ノ本一の陣羽織 main Level1
                'heirloom_effect_summary_id' => 51,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 1,
            ],
            [   // 日ノ本一の陣羽織 main Level2
                'heirloom_effect_summary_id' => 51,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 2,
            ],
            [   // 日ノ本一の陣羽織 main Level3
                'heirloom_effect_summary_id' => 51,
                'heirloom_effect_detail_id' => 31,
                'level_id' => 3,
            ],
            [   // 日ノ本一の陣羽織 main Level4
                'heirloom_effect_summary_id' => 51,
                'heirloom_effect_detail_id' => 32,
                'level_id' => 4,
            ],
            [   // 日ノ本一の陣羽織 main Level5
                'heirloom_effect_summary_id' => 51,
                'heirloom_effect_detail_id' => 33,
                'level_id' => 5,
            ],
            [   // 日ノ本一の陣羽織 sub Level1
                'heirloom_effect_summary_id' => 52,
                'heirloom_effect_detail_id' => 40,
                'level_id' => 1,
            ],
            [   // 日ノ本一の陣羽織 sub Level2
                'heirloom_effect_summary_id' => 52,
                'heirloom_effect_detail_id' => 40,
                'level_id' => 2,
            ],
            [   // 日ノ本一の陣羽織 sub Level3
                'heirloom_effect_summary_id' => 52,
                'heirloom_effect_detail_id' => 41,
                'level_id' => 3,
            ],
            [   // 日ノ本一の陣羽織 sub Level4
                'heirloom_effect_summary_id' => 52,
                'heirloom_effect_detail_id' => 40,
                'level_id' => 4,
            ],
            [   // 日ノ本一の陣羽織 sub Level5
                'heirloom_effect_summary_id' => 52,
                'heirloom_effect_detail_id' => 40,
                'level_id' => 5,
            ],
            [   // 天才魔女の草臥れ帽子 main Level1
                'heirloom_effect_summary_id' => 53,
                'heirloom_effect_detail_id' => 42,
                'level_id' => 1,
            ],
            [   // 天才魔女の草臥れ帽子 main Level2
                'heirloom_effect_summary_id' => 53,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 2,
            ],
            [   // 天才魔女の草臥れ帽子 main Level3
                'heirloom_effect_summary_id' => 53,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 3,
            ],
            [   // 天才魔女の草臥れ帽子 main Level4
                'heirloom_effect_summary_id' => 53,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 4,
            ],
            [   // 天才魔女の草臥れ帽子 main Level5
                'heirloom_effect_summary_id' => 53,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 5,
            ],
            [   // 天才魔女の草臥れ帽子 sub Level1
                'heirloom_effect_summary_id' => 54,
                'heirloom_effect_detail_id' => 44,
                'level_id' => 1,
            ],
            [   // 天才魔女の草臥れ帽子 sub Level2
                'heirloom_effect_summary_id' => 54,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 2,
            ],
            [   // 天才魔女の草臥れ帽子 sub Level3
                'heirloom_effect_summary_id' => 54,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 3,
            ],
            [   // 天才魔女の草臥れ帽子 sub Level4
                'heirloom_effect_summary_id' => 54,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 4,
            ],
            [   // 天才魔女の草臥れ帽子 sub Level5
                'heirloom_effect_summary_id' => 54,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 5,
            ],
            [   // 楯無 main Level1
                'heirloom_effect_summary_id' => 55,
                'heirloom_effect_detail_id' => 29,
                'level_id' => 1,
            ],
            [   // 楯無 main Level2
                'heirloom_effect_summary_id' => 55,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 2,
            ],
            [   // 楯無 main Level3
                'heirloom_effect_summary_id' => 55,
                'heirloom_effect_detail_id' => 31,
                'level_id' => 3,
            ],
            [   // 楯無 main Level4
                'heirloom_effect_summary_id' => 55,
                'heirloom_effect_detail_id' => 32,
                'level_id' => 4,
            ],
            [   // 楯無 main Level5
                'heirloom_effect_summary_id' => 55,
                'heirloom_effect_detail_id' => 33,
                'level_id' => 5,
            ],
            [   // 楯無 sub Level1
                'heirloom_effect_summary_id' => 56,
                'heirloom_effect_detail_id' => 46,
                'level_id' => 1,
            ],
            [   // 楯無 sub Level2
                'heirloom_effect_summary_id' => 56,
                'heirloom_effect_detail_id' => 46,
                'level_id' => 2,
            ],
            [   // 楯無 sub Level3
                'heirloom_effect_summary_id' => 56,
                'heirloom_effect_detail_id' => 46,
                'level_id' => 3,
            ],
            [   // 楯無 sub Level4
                'heirloom_effect_summary_id' => 56,
                'heirloom_effect_detail_id' => 46,
                'level_id' => 4,
            ],
            [   // 楯無 sub Level5
                'heirloom_effect_summary_id' => 56,
                'heirloom_effect_detail_id' => 46,
                'level_id' => 5,
            ],
            [   // 唐皮 main Level1
                'heirloom_effect_summary_id' => 57,
                'heirloom_effect_detail_id' => 42,
                'level_id' => 1,
            ],
            [   // 唐皮 main Level2
                'heirloom_effect_summary_id' => 57,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 2,
            ],
            [   // 唐皮 main Level3
                'heirloom_effect_summary_id' => 57,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 3,
            ],
            [   // 唐皮 main Level4
                'heirloom_effect_summary_id' => 57,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 4,
            ],
            [   // 唐皮 main Level5
                'heirloom_effect_summary_id' => 57,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 5,
            ],
            [   // 唐皮 sub Level1
                'heirloom_effect_summary_id' => 58,
                'heirloom_effect_detail_id' => 47,
                'level_id' => 1,
            ],
            [   // 唐皮 sub Level2
                'heirloom_effect_summary_id' => 58,
                'heirloom_effect_detail_id' => 48,
                'level_id' => 2,
            ],
            [   // 唐皮 sub Level3
                'heirloom_effect_summary_id' => 58,
                'heirloom_effect_detail_id' => 48,
                'level_id' => 3,
            ],
            [   // 唐皮 sub Level4
                'heirloom_effect_summary_id' => 58,
                'heirloom_effect_detail_id' => 48,
                'level_id' => 4,
            ],
            [   // 唐皮 sub Level5
                'heirloom_effect_summary_id' => 58,
                'heirloom_effect_detail_id' => 48,
                'level_id' => 5,
            ],
            [   // 木刀
                'heirloom_effect_summary_id' => 59,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 宗三左文字 main Level1
                'heirloom_effect_summary_id' => 60,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 宗三左文字 main Level2
                'heirloom_effect_summary_id' => 60,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 宗三左文字 main Level3
                'heirloom_effect_summary_id' => 60,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 宗三左文字 sub Level1
                'heirloom_effect_summary_id' => 61,
                'heirloom_effect_detail_id' => 49,
                'level_id' => 1,
            ],
            [   // 宗三左文字 sub Level2
                'heirloom_effect_summary_id' => 61,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 2,
            ],
            [   // 宗三左文字 sub Level3
                'heirloom_effect_summary_id' => 61,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 3,
            ],
            [   // アーミー・リボルバー main Level1
                'heirloom_effect_summary_id' => 62,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // アーミー・リボルバー main Level2
                'heirloom_effect_summary_id' => 62,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // アーミー・リボルバー main Level3
                'heirloom_effect_summary_id' => 62,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // アーミー・リボルバー sub Level1
                'heirloom_effect_summary_id' => 63,
                'heirloom_effect_detail_id' => 49,
                'level_id' => 1,
            ],
            [   // アーミー・リボルバー sub Level2
                'heirloom_effect_summary_id' => 63,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 2,
            ],
            [   // アーミー・リボルバー sub Level3
                'heirloom_effect_summary_id' => 63,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 3,
            ],
            [   // 蛇矛 main Level1
                'heirloom_effect_summary_id' => 64,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 蛇矛 main Level2
                'heirloom_effect_summary_id' => 64,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 蛇矛 main Level3
                'heirloom_effect_summary_id' => 64,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 蛇矛 sub Level1
                'heirloom_effect_summary_id' => 65,
                'heirloom_effect_detail_id' => 49,
                'level_id' => 1,
            ],
            [   // 蛇矛 sub Level2
                'heirloom_effect_summary_id' => 65,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 2,
            ],
            [   // てつはう sub Level3
                'heirloom_effect_summary_id' => 65,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 3,
            ],
            [   // 石切丸 main Level1
                'heirloom_effect_summary_id' => 66,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 石切丸 main Level2
                'heirloom_effect_summary_id' => 66,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 石切丸 main Level3
                'heirloom_effect_summary_id' => 66,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 石切丸 sub Level1
                'heirloom_effect_summary_id' => 67,
                'heirloom_effect_detail_id' => 49,
                'level_id' => 1,
            ],
            [   // 石切丸 sub Level2
                'heirloom_effect_summary_id' => 67,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 2,
            ],
            [   // 石切丸 sub Level3
                'heirloom_effect_summary_id' => 67,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 3,
            ],
            [   // 弩 main Level1
                'heirloom_effect_summary_id' => 68,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 弩 main Level2
                'heirloom_effect_summary_id' => 68,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 弩 main Level3
                'heirloom_effect_summary_id' => 68,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 弩 sub Level1
                'heirloom_effect_summary_id' => 69,
                'heirloom_effect_detail_id' => 49,
                'level_id' => 1,
            ],
            [   // 弩 sub Level2
                'heirloom_effect_summary_id' => 69,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 2,
            ],
            [   // 弩 sub Level3
                'heirloom_effect_summary_id' => 69,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 3,
            ],
            [   // 大典太光世 main Level1
                'heirloom_effect_summary_id' => 70,
                'heirloom_effect_detail_id' => 51,
                'level_id' => 1,
            ],
            [   // 大典太光世 main Level2
                'heirloom_effect_summary_id' => 70,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 2,
            ],
            [   // 大典太光世 main Level3
                'heirloom_effect_summary_id' => 70,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 3,
            ],
            [   // 大典太光世 main Level4
                'heirloom_effect_summary_id' => 70,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 4,
            ],
            [   // 大典太光世 main Level5
                'heirloom_effect_summary_id' => 70,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 5,
            ],
            [   // 大典太光世 sub Level1
                'heirloom_effect_summary_id' => 71,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 1,
            ],
            [   // 大典太光世 sub Level2
                'heirloom_effect_summary_id' => 71,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 2,
            ],
            [   // 大典太光世 sub Level3
                'heirloom_effect_summary_id' => 71,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 3,
            ],
            [   // 大典太光世 sub Level4
                'heirloom_effect_summary_id' => 71,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 4,
            ],
            [   // 大典太光世 sub Level5
                'heirloom_effect_summary_id' => 71,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 5,
            ],
            [   // 三日月宗近 main Level1
                'heirloom_effect_summary_id' => 72,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 三日月宗近 main Level2
                'heirloom_effect_summary_id' => 72,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 三日月宗近 main Level3
                'heirloom_effect_summary_id' => 72,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 三日月宗近 main Level4
                'heirloom_effect_summary_id' => 72,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 4,
            ],
            [   // 三日月宗近 main Level5
                'heirloom_effect_summary_id' => 72,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 5,
            ],
            [   // 三日月宗近 sub Level1
                'heirloom_effect_summary_id' => 73,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 1,
            ],
            [   // 三日月宗近 sub Level2
                'heirloom_effect_summary_id' => 73,
                'heirloom_effect_detail_id' => 34,
                'level_id' => 2,
            ],
            [   // 三日月宗近 sub Level3
                'heirloom_effect_summary_id' => 73,
                'heirloom_effect_detail_id' => 34,
                'level_id' => 3,
            ],
            [   // 三日月宗近 sub Level4
                'heirloom_effect_summary_id' => 73,
                'heirloom_effect_detail_id' => 34,
                'level_id' => 4,
            ],
            [   // 三日月宗近 sub Level5
                'heirloom_effect_summary_id' => 73,
                'heirloom_effect_detail_id' => 34,
                'level_id' => 5,
            ],
            [   // 蜻蛉切 main Level1
                'heirloom_effect_summary_id' => 74,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 蜻蛉切 main Level2
                'heirloom_effect_summary_id' => 74,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 蜻蛉切 main Level3
                'heirloom_effect_summary_id' => 74,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 蜻蛉切 main Level4
                'heirloom_effect_summary_id' => 74,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 4,
            ],
            [   // 蜻蛉切 main Level5
                'heirloom_effect_summary_id' => 74,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 5,
            ],
            [   // 蜻蛉切 sub Level1
                'heirloom_effect_summary_id' => 75,
                'heirloom_effect_detail_id' => 53,
                'level_id' => 1,
            ],
            [   // 蜻蛉切 sub Level2
                'heirloom_effect_summary_id' => 75,
                'heirloom_effect_detail_id' => 54,
                'level_id' => 2,
            ],
            [   // 蜻蛉切 sub Level3
                'heirloom_effect_summary_id' => 75,
                'heirloom_effect_detail_id' => 54,
                'level_id' => 3,
            ],
            [   // 蜻蛉切 sub Level4
                'heirloom_effect_summary_id' => 75,
                'heirloom_effect_detail_id' => 54,
                'level_id' => 4,
            ],
            [   // 蜻蛉切 sub Level5
                'heirloom_effect_summary_id' => 75,
                'heirloom_effect_detail_id' => 54,
                'level_id' => 5,
            ],
            [   // 雷上動 main Level1
                'heirloom_effect_summary_id' => 76,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 雷上動 main Level2
                'heirloom_effect_summary_id' => 76,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 雷上動 main Level3
                'heirloom_effect_summary_id' => 76,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 雷上動 main Level4
                'heirloom_effect_summary_id' => 76,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 4,
            ],
            [   // 雷上動 main Level5
                'heirloom_effect_summary_id' => 76,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 5,
            ],
            [   // 雷上動 sub Level1
                'heirloom_effect_summary_id' => 77,
                'heirloom_effect_detail_id' => 55,
                'level_id' => 1,
            ],
            [   // 雷上動 sub Level2
                'heirloom_effect_summary_id' => 77,
                'heirloom_effect_detail_id' => 56,
                'level_id' => 2,
            ],
            [   // 雷上動 sub Level3
                'heirloom_effect_summary_id' => 77,
                'heirloom_effect_detail_id' => 56,
                'level_id' => 3,
            ],
            [   // 雷上動 sub Level4
                'heirloom_effect_summary_id' => 77,
                'heirloom_effect_detail_id' => 56,
                'level_id' => 4,
            ],
            [   // 雷上動 sub Level5
                'heirloom_effect_summary_id' => 77,
                'heirloom_effect_detail_id' => 56,
                'level_id' => 5,
            ],
            [   // 髭切 main Level1
                'heirloom_effect_summary_id' => 78,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 髭切 main Level2
                'heirloom_effect_summary_id' => 78,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 髭切 main Level3
                'heirloom_effect_summary_id' => 78,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 髭切 main Level4
                'heirloom_effect_summary_id' => 78,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 4,
            ],
            [   // 髭切 main Level5
                'heirloom_effect_summary_id' => 78,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 5,
            ],
            [   // 髭切 sub Level1
                'heirloom_effect_summary_id' => 79,
                'heirloom_effect_detail_id' => 57,
                'level_id' => 1,
            ],
            [   // 髭切 sub Level2
                'heirloom_effect_summary_id' => 79,
                'heirloom_effect_detail_id' => 58,
                'level_id' => 2,
            ],
            [   // 髭切 sub Level3
                'heirloom_effect_summary_id' => 79,
                'heirloom_effect_detail_id' => 58,
                'level_id' => 3,
            ],
            [   // 髭切 sub Level4
                'heirloom_effect_summary_id' => 79,
                'heirloom_effect_detail_id' => 58,
                'level_id' => 4,
            ],
            [   // 髭切 sub Level5
                'heirloom_effect_summary_id' => 79,
                'heirloom_effect_detail_id' => 58,
                'level_id' => 5,
            ],
            [   // 墨縄 main Level1
                'heirloom_effect_summary_id' => 80,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 墨縄 main Level2
                'heirloom_effect_summary_id' => 80,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 墨縄 main Level3
                'heirloom_effect_summary_id' => 80,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 墨縄 main Level4
                'heirloom_effect_summary_id' => 80,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 4,
            ],
            [   // 墨縄 main Level5
                'heirloom_effect_summary_id' => 80,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 5,
            ],
            [   // 墨縄 sub Level1
                'heirloom_effect_summary_id' => 81,
                'heirloom_effect_detail_id' => 59,
                'level_id' => 1,
            ],
            [   // 墨縄 sub Level2
                'heirloom_effect_summary_id' => 81,
                'heirloom_effect_detail_id' => 60,
                'level_id' => 2,
            ],
            [   // 墨縄 sub Level3
                'heirloom_effect_summary_id' => 81,
                'heirloom_effect_detail_id' => 60,
                'level_id' => 3,
            ],
            [   // 墨縄 sub Level4
                'heirloom_effect_summary_id' => 81,
                'heirloom_effect_detail_id' => 60,
                'level_id' => 4,
            ],
            [   // 墨縄 sub Level5
                'heirloom_effect_summary_id' => 81,
                'heirloom_effect_detail_id' => 60,
                'level_id' => 5,
            ],
            [   // 天羽々斬 main Level1
                'heirloom_effect_summary_id' => 82,
                'heirloom_effect_detail_id' => 51,
                'level_id' => 1,
            ],
            [   // 天羽々斬 main Level2
                'heirloom_effect_summary_id' => 82,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 2,
            ],
            [   // 天羽々斬 main Level3
                'heirloom_effect_summary_id' => 82,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 3,
            ],
            [   // 天羽々斬 main Level4
                'heirloom_effect_summary_id' => 82,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 4,
            ],
            [   // 天羽々斬 main Level5
                'heirloom_effect_summary_id' => 82,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 5,
            ],
            [   // 天羽々斬 sub Level1
                'heirloom_effect_summary_id' => 83,
                'heirloom_effect_detail_id' => 42,
                'level_id' => 1,
            ],
            [   // 天羽々斬 sub Level2
                'heirloom_effect_summary_id' => 83,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 2,
            ],
            [   // 天羽々斬 sub Level3
                'heirloom_effect_summary_id' => 83,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 3,
            ],
            [   // 天羽々斬 sub Level4
                'heirloom_effect_summary_id' => 83,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 4,
            ],
            [   // 天羽々斬 sub Level5
                'heirloom_effect_summary_id' => 83,
                'heirloom_effect_detail_id' => 43,
                'level_id' => 5,
            ],
            [   // 和泉守兼定 main Level1
                'heirloom_effect_summary_id' => 84,
                'heirloom_effect_detail_id' => 51,
                'level_id' => 1,
            ],
            [   // 和泉守兼定 main Level2
                'heirloom_effect_summary_id' => 84,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 2,
            ],
            [   // 和泉守兼定 main Level3
                'heirloom_effect_summary_id' => 84,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 3,
            ],
            [   // 和泉守兼定 main Level4
                'heirloom_effect_summary_id' => 84,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 4,
            ],
            [   // 和泉守兼定 main Level5
                'heirloom_effect_summary_id' => 84,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 5,
            ],
            [   // 和泉守兼定 sub Level1
                'heirloom_effect_summary_id' => 85,
                'heirloom_effect_detail_id' => 46,
                'level_id' => 1,
            ],
            [   // 和泉守兼定 sub Level2
                'heirloom_effect_summary_id' => 85,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 2,
            ],
            [   // 和泉守兼定 sub Level3
                'heirloom_effect_summary_id' => 85,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // 和泉守兼定 sub Level4
                'heirloom_effect_summary_id' => 85,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 4,
            ],
            [   // 和泉守兼定 sub Level5
                'heirloom_effect_summary_id' => 85,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 5,
            ],
            [   // 青龍偃月刀 main Level1
                'heirloom_effect_summary_id' => 86,
                'heirloom_effect_detail_id' => 51,
                'level_id' => 1,
            ],
            [   // 青龍偃月刀 main Level2
                'heirloom_effect_summary_id' => 86,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 2,
            ],
            [   // 青龍偃月刀 main Level3
                'heirloom_effect_summary_id' => 86,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 3,
            ],
            [   // 青龍偃月刀 main Level4
                'heirloom_effect_summary_id' => 86,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 4,
            ],
            [   // 青龍偃月刀 main Level5
                'heirloom_effect_summary_id' => 86,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 5,
            ],
            [   // 青龍偃月刀 sub Level1
                'heirloom_effect_summary_id' => 87,
                'heirloom_effect_detail_id' => 62,
                'level_id' => 1,
            ],
            [   // 青龍偃月刀 sub Level2
                'heirloom_effect_summary_id' => 87,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 2,
            ],
            [   // 青龍偃月刀 sub Level3
                'heirloom_effect_summary_id' => 87,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 3,
            ],
            [   // 青龍偃月刀 sub Level4
                'heirloom_effect_summary_id' => 87,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 4,
            ],
            [   // 青龍偃月刀 sub Level5
                'heirloom_effect_summary_id' => 87,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 5,
            ],
            [   // 童子切安綱 main Level1
                'heirloom_effect_summary_id' => 88,
                'heirloom_effect_detail_id' => 51,
                'level_id' => 1,
            ],
            [   // 童子切安綱 main Level2
                'heirloom_effect_summary_id' => 88,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 2,
            ],
            [   // 童子切安綱 main Level3
                'heirloom_effect_summary_id' => 88,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 3,
            ],
            [   // 童子切安綱 main Level4
                'heirloom_effect_summary_id' => 88,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 4,
            ],
            [   // 童子切安綱 main Level5
                'heirloom_effect_summary_id' => 88,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 5,
            ],
            [   // 童子切安綱 sub Level1
                'heirloom_effect_summary_id' => 89,
                'heirloom_effect_detail_id' => 49,
                'level_id' => 1,
            ],
            [   // 童子切安綱 sub Level2
                'heirloom_effect_summary_id' => 89,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 2,
            ],
            [   // 童子切安綱 sub Level3
                'heirloom_effect_summary_id' => 89,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 3,
            ],
            [   // 童子切安綱 sub Level4
                'heirloom_effect_summary_id' => 89,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 4,
            ],
            [   // 童子切安綱 sub Level5
                'heirloom_effect_summary_id' => 89,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 5,
            ],
            [   // 鬼丸国綱 main Level1
                'heirloom_effect_summary_id' => 90,
                'heirloom_effect_detail_id' => 51,
                'level_id' => 1,
            ],
            [   // 鬼丸国綱 main Level2
                'heirloom_effect_summary_id' => 90,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 2,
            ],
            [   // 鬼丸国綱 main Level3
                'heirloom_effect_summary_id' => 90,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 3,
            ],
            [   // 鬼丸国綱 main Level4
                'heirloom_effect_summary_id' => 90,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 4,
            ],
            [   // 鬼丸国綱 main Level5
                'heirloom_effect_summary_id' => 90,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 5,
            ],
            [   // 鬼丸国綱 sub Level1
                'heirloom_effect_summary_id' => 91,
                'heirloom_effect_detail_id' => 46,
                'level_id' => 1,
            ],
            [   // 鬼丸国綱 sub Level2
                'heirloom_effect_summary_id' => 91,
                'heirloom_effect_detail_id' => 64,
                'level_id' => 2,
            ],
            [   // 鬼丸国綱 sub Level3
                'heirloom_effect_summary_id' => 91,
                'heirloom_effect_detail_id' => 64,
                'level_id' => 3,
            ],
            [   // 鬼丸国綱 sub Level4
                'heirloom_effect_summary_id' => 91,
                'heirloom_effect_detail_id' => 64,
                'level_id' => 4,
            ],
            [   // 鬼丸国綱 sub Level5
                'heirloom_effect_summary_id' => 91,
                'heirloom_effect_detail_id' => 64,
                'level_id' => 5,
            ],
            [   // 毒匕寒月刃 main Level1
                'heirloom_effect_summary_id' => 92,
                'heirloom_effect_detail_id' => 51,
                'level_id' => 1,
            ],
            [   // 毒匕寒月刃 main Level2
                'heirloom_effect_summary_id' => 92,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 2,
            ],
            [   // 毒匕寒月刃 main Level3
                'heirloom_effect_summary_id' => 92,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 3,
            ],
            [   // 毒匕寒月刃 main Level4
                'heirloom_effect_summary_id' => 92,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 4,
            ],
            [   // 毒匕寒月刃 main Level5
                'heirloom_effect_summary_id' => 92,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 5,
            ],
            [   // 毒匕寒月刃 sub Level1
                'heirloom_effect_summary_id' => 93,
                'heirloom_effect_detail_id' => 65,
                'level_id' => 1,
            ],
            [   // 毒匕寒月刃 sub Level2
                'heirloom_effect_summary_id' => 93,
                'heirloom_effect_detail_id' => 66,
                'level_id' => 2,
            ],
            [   // 毒匕寒月刃 sub Level3
                'heirloom_effect_summary_id' => 93,
                'heirloom_effect_detail_id' => 66,
                'level_id' => 3,
            ],
            [   // 毒匕寒月刃 sub Level4
                'heirloom_effect_summary_id' => 93,
                'heirloom_effect_detail_id' => 66,
                'level_id' => 4,
            ],
            [   // 毒匕寒月刃 sub Level5
                'heirloom_effect_summary_id' => 93,
                'heirloom_effect_detail_id' => 66,
                'level_id' => 5,
            ],
            [   // 輝く太陽と月の双剣 main Level1
                'heirloom_effect_summary_id' => 94,
                'heirloom_effect_detail_id' => 51,
                'level_id' => 1,
            ],
            [   // 輝く太陽と月の双剣 main Level2
                'heirloom_effect_summary_id' => 94,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 2,
            ],
            [   // 輝く太陽と月の双剣 main Level3
                'heirloom_effect_summary_id' => 94,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 3,
            ],
            [   // 輝く太陽と月の双剣 main Level4
                'heirloom_effect_summary_id' => 94,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 4,
            ],
            [   // 輝く太陽と月の双剣 main Level5
                'heirloom_effect_summary_id' => 94,
                'heirloom_effect_detail_id' => 52,
                'level_id' => 5,
            ],
            [   // 輝く太陽と月の双剣 sub Level1
                'heirloom_effect_summary_id' => 95,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 1,
            ],
            [   // 輝く太陽と月の双剣 sub Level2
                'heirloom_effect_summary_id' => 95,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 2,
            ],
            [   // 輝く太陽と月の双剣 sub Level3
                'heirloom_effect_summary_id' => 95,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 3,
            ],
            [   // 輝く太陽と月の双剣 sub Level4
                'heirloom_effect_summary_id' => 95,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 4,
            ],
            [   // 輝く太陽と月の双剣 sub Level5
                'heirloom_effect_summary_id' => 95,
                'heirloom_effect_detail_id' => 27,
                'level_id' => 5,
            ],
            [   // 七支刀 main Level1
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 67,
                'level_id' => 1,
            ],
            [   // 七支刀 main Level2
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 68,
                'level_id' => 2,
            ],
            [   // 七支刀 main Level3
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 68,
                'level_id' => 3,
            ],
            [   // 七支刀 main Level4
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 68,
                'level_id' => 4,
            ],
            [   // 七支刀 main Level5
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 68,
                'level_id' => 5,
            ],
            [   // 七支刀 main_detail Level1
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 69,
                'level_id' => 1,
            ],
            [   // 七支刀 main_detail Level2
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 70,
                'level_id' => 2,
            ],
            [   // 七支刀 main_detail Level3
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 70,
                'level_id' => 3,
            ],
            [   // 七支刀 main_detail Level4
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 70,
                'level_id' => 4,
            ],
            [   // 七支刀 main_detail Level5
                'heirloom_effect_summary_id' => 96,
                'heirloom_effect_detail_id' => 70,
                'level_id' => 5,
            ],
            [   // 木製軍配
                'heirloom_effect_summary_id' => 97,
                'heirloom_effect_detail_id' => 71,
                'level_id' => 1,
            ],
            [   // 蒼海配 main Level1
                'heirloom_effect_summary_id' => 98,
                'heirloom_effect_detail_id' => 37,
                'level_id' => 1,
            ],
            [   // 蒼海配 main Level2
                'heirloom_effect_summary_id' => 98,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 2,
            ],
            [   // 蒼海配 main Level3
                'heirloom_effect_summary_id' => 98,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 3,
            ],
            [   // 蒼海配 sub Level1
                'heirloom_effect_summary_id' => 99,
                'heirloom_effect_detail_id' => 72,
                'level_id' => 1,
            ],
            [   // 蒼海配 sub Level2
                'heirloom_effect_summary_id' => 99,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 2,
            ],
            [   // 蒼海配 sub Level3
                'heirloom_effect_summary_id' => 99,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 3,
            ],
            [   // 緋炎配 main Level1
                'heirloom_effect_summary_id' => 100,
                'heirloom_effect_detail_id' => 37,
                'level_id' => 1,
            ],
            [   // 緋炎配 main Level2
                'heirloom_effect_summary_id' => 100,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 2,
            ],
            [   // 緋炎配 main Level3
                'heirloom_effect_summary_id' => 100,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 3,
            ],
            [   // 緋炎配 sub Level1
                'heirloom_effect_summary_id' => 101,
                'heirloom_effect_detail_id' => 72,
                'level_id' => 1,
            ],
            [   // 緋炎配 sub Level2
                'heirloom_effect_summary_id' => 101,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 2,
            ],
            [   // 緋炎配 sub Level3
                'heirloom_effect_summary_id' => 101,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 3,
            ],
            [   // 碧玉配 main Level1
                'heirloom_effect_summary_id' => 102,
                'heirloom_effect_detail_id' => 37,
                'level_id' => 1,
            ],
            [   // 碧玉配 main Level2
                'heirloom_effect_summary_id' => 102,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 2,
            ],
            [   // 碧玉配 main Level3
                'heirloom_effect_summary_id' => 102,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 3,
            ],
            [   // 碧玉配 sub Level1
                'heirloom_effect_summary_id' => 103,
                'heirloom_effect_detail_id' => 72,
                'level_id' => 1,
            ],
            [   // 碧玉配 sub Level2
                'heirloom_effect_summary_id' => 103,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 2,
            ],
            [   // 碧玉配 sub Level3
                'heirloom_effect_summary_id' => 103,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 3,
            ],
            [   // 玄天配 main Level1
                'heirloom_effect_summary_id' => 104,
                'heirloom_effect_detail_id' => 37,
                'level_id' => 1,
            ],
            [   // 玄天配 main Level2
                'heirloom_effect_summary_id' => 104,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 2,
            ],
            [   // 玄天配 main Level3
                'heirloom_effect_summary_id' => 104,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 3,
            ],
            [   // 玄天配 sub Level1
                'heirloom_effect_summary_id' => 105,
                'heirloom_effect_detail_id' => 72,
                'level_id' => 1,
            ],
            [   // 玄天配 sub Level2
                'heirloom_effect_summary_id' => 105,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 2,
            ],
            [   // 玄天配 sub Level3
                'heirloom_effect_summary_id' => 105,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 3,
            ],
            [   // 紫電配 main Level1
                'heirloom_effect_summary_id' => 106,
                'heirloom_effect_detail_id' => 37,
                'level_id' => 1,
            ],
            [   // 紫電配 main Level2
                'heirloom_effect_summary_id' => 106,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 2,
            ],
            [   // 紫電配 main Level3
                'heirloom_effect_summary_id' => 106,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 3,
            ],
            [   // 紫電配 sub Level1
                'heirloom_effect_summary_id' => 107,
                'heirloom_effect_detail_id' => 72,
                'level_id' => 1,
            ],
            [   // 紫電配 sub Level2
                'heirloom_effect_summary_id' => 107,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 2,
            ],
            [   // 紫電配 sub Level3
                'heirloom_effect_summary_id' => 107,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 3,
            ],
            [   // 琥珀配 main Level1
                'heirloom_effect_summary_id' => 108,
                'heirloom_effect_detail_id' => 37,
                'level_id' => 1,
            ],
            [   // 琥珀配 main Level2
                'heirloom_effect_summary_id' => 108,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 2,
            ],
            [   // 琥珀配 main Level3
                'heirloom_effect_summary_id' => 108,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 3,
            ],
            [   // 琥珀配 sub Level1
                'heirloom_effect_summary_id' => 109,
                'heirloom_effect_detail_id' => 72,
                'level_id' => 1,
            ],
            [   // 琥珀配 sub Level2
                'heirloom_effect_summary_id' => 109,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 2,
            ],
            [   // 琥珀配 sub Level3
                'heirloom_effect_summary_id' => 109,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 3,
            ],
            [   // 黄金配 main Level1
                'heirloom_effect_summary_id' => 110,
                'heirloom_effect_detail_id' => 37,
                'level_id' => 1,
            ],
            [   // 黄金配 main Level2
                'heirloom_effect_summary_id' => 110,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 2,
            ],
            [   // 黄金配 main Level3
                'heirloom_effect_summary_id' => 110,
                'heirloom_effect_detail_id' => 38,
                'level_id' => 3,
            ],
            [   // 黄金配 sub Level1
                'heirloom_effect_summary_id' => 111,
                'heirloom_effect_detail_id' => 72,
                'level_id' => 1,
            ],
            [   // 黄金配 sub Level2
                'heirloom_effect_summary_id' => 111,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 2,
            ],
            [   // 黄金配 sub Level3
                'heirloom_effect_summary_id' => 111,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 3,
            ],
            [   // 金箔采配 main Level1
                'heirloom_effect_summary_id' => 112,
                'heirloom_effect_detail_id' => 71,
                'level_id' => 1,
            ],
            [   // 金箔采配 main Level2
                'heirloom_effect_summary_id' => 112,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 2,
            ],
            [   // 金箔采配 main Level3
                'heirloom_effect_summary_id' => 112,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 3,
            ],
            [   // 金箔采配 main Level4
                'heirloom_effect_summary_id' => 112,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 4,
            ],
            [   // 金箔采配 main Level5
                'heirloom_effect_summary_id' => 112,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 5,
            ],
            [   // 金箔采配 sub Level1
                'heirloom_effect_summary_id' => 113,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 1,
            ],
            [   // 金箔采配 sub Level2
                'heirloom_effect_summary_id' => 113,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 2,
            ],
            [   // 金箔采配 sub Level3
                'heirloom_effect_summary_id' => 113,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 3,
            ],
            [   // 金箔采配 sub Level4
                'heirloom_effect_summary_id' => 113,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 4,
            ],
            [   // 金箔采配 sub Level5
                'heirloom_effect_summary_id' => 113,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 5,
            ],
            [   // 羽扇 main Level1
                'heirloom_effect_summary_id' => 114,
                'heirloom_effect_detail_id' => 72,
                'level_id' => 1,
            ],
            [   // 羽扇 main Level2
                'heirloom_effect_summary_id' => 114,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 2,
            ],
            [   // 羽扇 main Level3
                'heirloom_effect_summary_id' => 114,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 3,
            ],
            [   // 羽扇 main Level4
                'heirloom_effect_summary_id' => 114,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 4,
            ],
            [   // 羽扇 main Level5
                'heirloom_effect_summary_id' => 114,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 5,
            ],
            [   // 羽扇 sub Level1
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 羽扇 sub Level2
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 羽扇 sub Level3
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 羽扇 sub Level4
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 4,
            ],
            [   // 羽扇 sub Level5
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 5,
            ],
            [   // 羽扇 detail Level1
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 71,
                'level_id' => 1,
            ],
            [   // 羽扇 detail Level2
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 2,
            ],
            [   // 羽扇 detail Level3
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 3,
            ],
            [   // 羽扇 detail Level4
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 4,
            ],
            [   // 羽扇 detail Level5
                'heirloom_effect_summary_id' => 115,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 5,
            ],
            [   // 天下布武 main Level1
                'heirloom_effect_summary_id' => 116,
                'heirloom_effect_detail_id' => 71,
                'level_id' => 1,
            ],
            [   // 天下布武 main Level2
                'heirloom_effect_summary_id' => 116,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 2,
            ],
            [   // 天下布武 main Level3
                'heirloom_effect_summary_id' => 116,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 3,
            ],
            [   // 天下布武 main Level4
                'heirloom_effect_summary_id' => 116,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 4,
            ],
            [   // 天下布武 main Level5
                'heirloom_effect_summary_id' => 116,
                'heirloom_effect_detail_id' => 74,
                'level_id' => 5,
            ],
            [   // 天下布武 sub Level1
                'heirloom_effect_summary_id' => 117,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 1,
            ],
            [   // 天下布武 sub Level2
                'heirloom_effect_summary_id' => 117,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 2,
            ],
            [   // 天下布武 sub Level3
                'heirloom_effect_summary_id' => 117,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 3,
            ],
            [   // 天下布武 sub Level4
                'heirloom_effect_summary_id' => 117,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 4,
            ],
            [   // 天下布武 sub Level5
                'heirloom_effect_summary_id' => 117,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 5,
            ],
            [   // 臥龍鳳雛 main Level1
                'heirloom_effect_summary_id' => 118,
                'heirloom_effect_detail_id' => 62,
                'level_id' => 1,
            ],
            [   // 臥龍鳳雛 main Level2
                'heirloom_effect_summary_id' => 118,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 2,
            ],
            [   // 臥龍鳳雛 main Level3
                'heirloom_effect_summary_id' => 118,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 3,
            ],
            [   // 臥龍鳳雛 main Level4
                'heirloom_effect_summary_id' => 118,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 4,
            ],
            [   // 臥龍鳳雛 main Level5
                'heirloom_effect_summary_id' => 118,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 5,
            ],
            [   // 臥龍鳳雛 sub Level1
                'heirloom_effect_summary_id' => 119,
                'heirloom_effect_detail_id' => 75,
                'level_id' => 1,
            ],
            [   // 臥龍鳳雛 sub Level2
                'heirloom_effect_summary_id' => 119,
                'heirloom_effect_detail_id' => 76,
                'level_id' => 2,
            ],
            [   // 臥龍鳳雛 sub Level3
                'heirloom_effect_summary_id' => 119,
                'heirloom_effect_detail_id' => 76,
                'level_id' => 3,
            ],
            [   // 臥龍鳳雛 sub Level4
                'heirloom_effect_summary_id' => 119,
                'heirloom_effect_detail_id' => 76,
                'level_id' => 4,
            ],
            [   // 臥龍鳳雛 sub Level5
                'heirloom_effect_summary_id' => 119,
                'heirloom_effect_detail_id' => 76,
                'level_id' => 5,
            ],
            [   // 軍配団扇 main Level1
                'heirloom_effect_summary_id' => 120,
                'heirloom_effect_detail_id' => 62,
                'level_id' => 1,
            ],
            [   // 軍配団扇 main Level2
                'heirloom_effect_summary_id' => 120,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 2,
            ],
            [   // 軍配団扇 main Level3
                'heirloom_effect_summary_id' => 120,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 3,
            ],
            [   // 軍配団扇 main Level4
                'heirloom_effect_summary_id' => 120,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 4,
            ],
            [   // 軍配団扇 main Level5
                'heirloom_effect_summary_id' => 120,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 5,
            ],
            [   // 軍配団扇 sub Level1
                'heirloom_effect_summary_id' => 121,
                'heirloom_effect_detail_id' => 77,
                'level_id' => 1,
            ],
            [   // 軍配団扇 sub Level2
                'heirloom_effect_summary_id' => 121,
                'heirloom_effect_detail_id' => 78,
                'level_id' => 2,
            ],
            [   // 軍配団扇 sub Level3
                'heirloom_effect_summary_id' => 121,
                'heirloom_effect_detail_id' => 78,
                'level_id' => 3,
            ],
            [   // 軍配団扇 sub Level4
                'heirloom_effect_summary_id' => 121,
                'heirloom_effect_detail_id' => 78,
                'level_id' => 4,
            ],
            [   // 軍配団扇 sub Level5
                'heirloom_effect_summary_id' => 121,
                'heirloom_effect_detail_id' => 78,
                'level_id' => 5,
            ],
            [   // 軍扇 main Level1
                'heirloom_effect_summary_id' => 122,
                'heirloom_effect_detail_id' => 62,
                'level_id' => 1,
            ],
            [   // 軍扇 main Level2
                'heirloom_effect_summary_id' => 122,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 2,
            ],
            [   // 軍扇 main Level3
                'heirloom_effect_summary_id' => 122,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 3,
            ],
            [   // 軍扇 main Level4
                'heirloom_effect_summary_id' => 122,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 4,
            ],
            [   // 軍扇 main Level5
                'heirloom_effect_summary_id' => 122,
                'heirloom_effect_detail_id' => 63,
                'level_id' => 5,
            ],
            [   // 軍扇 sub Level1
                'heirloom_effect_summary_id' => 123,
                'heirloom_effect_detail_id' => 79,
                'level_id' => 1,
            ],
            [   // 軍扇 sub Level2
                'heirloom_effect_summary_id' => 123,
                'heirloom_effect_detail_id' => 80,
                'level_id' => 2,
            ],
            [   // 軍扇 sub Level3
                'heirloom_effect_summary_id' => 123,
                'heirloom_effect_detail_id' => 80,
                'level_id' => 3,
            ],
            [   // 軍扇 sub Level4
                'heirloom_effect_summary_id' => 123,
                'heirloom_effect_detail_id' => 80,
                'level_id' => 4,
            ],
            [   // 軍扇 sub Level5
                'heirloom_effect_summary_id' => 123,
                'heirloom_effect_detail_id' => 80,
                'level_id' => 5,
            ],
            [   // 軍馬
                'heirloom_effect_summary_id' => 124,
                'heirloom_effect_detail_id' => 82,
                'level_id' => 1,
            ],
            [   // 鏡栗毛 main Level1
                'heirloom_effect_summary_id' => 125,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // 鏡栗毛 main Level2
                'heirloom_effect_summary_id' => 125,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 2,
            ],
            [   // 鏡栗毛 main Level3
                'heirloom_effect_summary_id' => 125,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // 鏡栗毛 sub Level1
                'heirloom_effect_summary_id' => 126,
                'heirloom_effect_detail_id' => 44,
                'level_id' => 1,
            ],
            [   // 鏡栗毛 sub Level2
                'heirloom_effect_summary_id' => 126,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 2,
            ],
            [   // 鏡栗毛 sub Level3
                'heirloom_effect_summary_id' => 126,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 3,
            ],
            [   // 白鵠 main Level1
                'heirloom_effect_summary_id' => 127,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // 白鵠 main Level2
                'heirloom_effect_summary_id' => 127,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 2,
            ],
            [   // 白鵠 main Level3
                'heirloom_effect_summary_id' => 127,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // 白鵠 sub Level1
                'heirloom_effect_summary_id' => 128,
                'heirloom_effect_detail_id' => 44,
                'level_id' => 1,
            ],
            [   // 白鵠 sub Level2
                'heirloom_effect_summary_id' => 128,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 2,
            ],
            [   // 白鵠 sub Level3
                'heirloom_effect_summary_id' => 128,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 3,
            ],
            [   // 飛電 main Level1
                'heirloom_effect_summary_id' => 129,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // 飛電 main Level2
                'heirloom_effect_summary_id' => 129,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 2,
            ],
            [   // 飛電 main Level3
                'heirloom_effect_summary_id' => 129,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // 飛電 sub Level1
                'heirloom_effect_summary_id' => 130,
                'heirloom_effect_detail_id' => 44,
                'level_id' => 1,
            ],
            [   // 飛電 sub Level2
                'heirloom_effect_summary_id' => 130,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 2,
            ],
            [   // 飛電 sub Level3
                'heirloom_effect_summary_id' => 130,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 3,
            ],
            [   // 汗血馬 main Level1
                'heirloom_effect_summary_id' => 131,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // 汗血馬 main Level2
                'heirloom_effect_summary_id' => 131,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 2,
            ],
            [   // 汗血馬 main Level3
                'heirloom_effect_summary_id' => 131,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // 汗血馬 sub Level1
                'heirloom_effect_summary_id' => 132,
                'heirloom_effect_detail_id' => 44,
                'level_id' => 1,
            ],
            [   // 汗血馬 sub Level2
                'heirloom_effect_summary_id' => 132,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 2,
            ],
            [   // 汗血馬 sub Level3
                'heirloom_effect_summary_id' => 132,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 3,
            ],
            [   // 翡翠 main Level1
                'heirloom_effect_summary_id' => 133,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // 翡翠 main Level2
                'heirloom_effect_summary_id' => 133,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 2,
            ],
            [   // 翡翠 main Level3
                'heirloom_effect_summary_id' => 133,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // 翡翠 sub Level1
                'heirloom_effect_summary_id' => 134,
                'heirloom_effect_detail_id' => 44,
                'level_id' => 1,
            ],
            [   // 翡翠 sub Level2
                'heirloom_effect_summary_id' => 134,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 2,
            ],
            [   // 翡翠 sub Level3
                'heirloom_effect_summary_id' => 134,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 3,
            ],
            [   // 奥州驪 main Level1
                'heirloom_effect_summary_id' => 135,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // 奥州驪 main Level2
                'heirloom_effect_summary_id' => 135,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 2,
            ],
            [   // 奥州驪 main Level3
                'heirloom_effect_summary_id' => 135,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // 奥州驪 sub Level1
                'heirloom_effect_summary_id' => 136,
                'heirloom_effect_detail_id' => 44,
                'level_id' => 1,
            ],
            [   // 奥州驪 sub Level2
                'heirloom_effect_summary_id' => 136,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 2,
            ],
            [   // 奥州驪 sub Level3
                'heirloom_effect_summary_id' => 136,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 3,
            ],
            [   // グリンガレット main Level1
                'heirloom_effect_summary_id' => 137,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // グリンガレット main Level2
                'heirloom_effect_summary_id' => 137,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 2,
            ],
            [   // グリンガレット main Level3
                'heirloom_effect_summary_id' => 137,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // グリンガレット sub Level1
                'heirloom_effect_summary_id' => 138,
                'heirloom_effect_detail_id' => 44,
                'level_id' => 1,
            ],
            [   // グリンガレット sub Level2
                'heirloom_effect_summary_id' => 138,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 2,
            ],
            [   // グリンガレット sub Level3
                'heirloom_effect_summary_id' => 138,
                'heirloom_effect_detail_id' => 45,
                'level_id' => 3,
            ],
            [   // 青海波 main Level1
                'heirloom_effect_summary_id' => 139,
                'heirloom_effect_detail_id' => 83,
                'level_id' => 1,
            ],
            [   // 青海波 main Level2
                'heirloom_effect_summary_id' => 139,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 2,
            ],
            [   // 青海波 main Level3
                'heirloom_effect_summary_id' => 139,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 3,
            ],
            [   // 青海波 main Level4
                'heirloom_effect_summary_id' => 139,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 4,
            ],
            [   // 青海波 main Level5
                'heirloom_effect_summary_id' => 139,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 5,
            ],
            [   // 青海波 sub Level1
                'heirloom_effect_summary_id' => 140,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 1,
            ],
            [   // 青海波 sub Level2
                'heirloom_effect_summary_id' => 140,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 2,
            ],
            [   // 青海波 sub Level3
                'heirloom_effect_summary_id' => 140,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 3,
            ],
            [   // 青海波 sub Level4
                'heirloom_effect_summary_id' => 140,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 4,
            ],
            [   // 青海波 sub Level5
                'heirloom_effect_summary_id' => 140,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 5,
            ],
            [   // 赤兎馬 main Level1
                'heirloom_effect_summary_id' => 141,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // 赤兎馬 main Level2
                'heirloom_effect_summary_id' => 141,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 2,
            ],
            [   // 赤兎馬 main Level3
                'heirloom_effect_summary_id' => 141,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // 赤兎馬 main Level4
                'heirloom_effect_summary_id' => 141,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 4,
            ],
            [   // 赤兎馬 main Level5
                'heirloom_effect_summary_id' => 141,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 5,
            ],
            [   // 赤兎馬 sub Level1
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 1,
            ],
            [   // 赤兎馬 sub Level2
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 85,
                'level_id' => 2,
            ],
            [   // 赤兎馬 sub Level3
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 86,
                'level_id' => 3,
            ],
            [   // 赤兎馬 sub Level4
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 86,
                'level_id' => 4,
            ],
            [   // 赤兎馬 sub Level5
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 86,
                'level_id' => 5,
            ],
            [   // 赤兎馬 detail Level1
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 1,
            ],
            [   // 赤兎馬 detail Level2
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 2,
            ],
            [   // 赤兎馬 detail Level3
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 3,
            ],
            [   // 赤兎馬 detail Level4
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 4,
            ],
            [   // 赤兎馬 detail Level5
                'heirloom_effect_summary_id' => 142,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 5,
            ],
            [   // 的盧 main Level1
                'heirloom_effect_summary_id' => 143,
                'heirloom_effect_detail_id' => 83,
                'level_id' => 1,
            ],
            [   // 的盧 main Level2
                'heirloom_effect_summary_id' => 143,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 2,
            ],
            [   // 的盧 main Level3
                'heirloom_effect_summary_id' => 143,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 3,
            ],
            [   // 的盧 main Level4
                'heirloom_effect_summary_id' => 143,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 4,
            ],
            [   // 的盧 main Level5
                'heirloom_effect_summary_id' => 143,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 5,
            ],
            [   // 的盧 sub Level1
                'heirloom_effect_summary_id' => 144,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 1,
            ],
            [   // 的盧 sub Level2
                'heirloom_effect_summary_id' => 144,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 2,
            ],
            [   // 的盧 sub Level3
                'heirloom_effect_summary_id' => 144,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 3,
            ],
            [   // 的盧 sub Level4
                'heirloom_effect_summary_id' => 144,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 4,
            ],
            [   // 的盧 sub Level5
                'heirloom_effect_summary_id' => 144,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 5,
            ],
            [   // 王庭 main Level1
                'heirloom_effect_summary_id' => 145,
                'heirloom_effect_detail_id' => 26,
                'level_id' => 1,
            ],
            [   // 王庭 main Level2
                'heirloom_effect_summary_id' => 145,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 2,
            ],
            [   // 王庭 main Level3
                'heirloom_effect_summary_id' => 145,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 3,
            ],
            [   // 王庭 main Level4
                'heirloom_effect_summary_id' => 145,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 4,
            ],
            [   // 王庭 main Level5
                'heirloom_effect_summary_id' => 145,
                'heirloom_effect_detail_id' => 61,
                'level_id' => 5,
            ],
            [   // 王庭 sub Level1
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 王庭 sub Level2
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 王庭 sub Level3
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 王庭 sub Level4
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 4,
            ],
            [   // 王庭 sub Level5
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 5,
            ],
            [   // 王庭 detail Level1
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 1,
            ],
            [   // 王庭 detail Level2
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 2,
            ],
            [   // 王庭 detail Level3
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 3,
            ],
            [   // 王庭 detail Level4
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 4,
            ],
            [   // 王庭 detail Level5
                'heirloom_effect_summary_id' => 146,
                'heirloom_effect_detail_id' => 87,
                'level_id' => 5,
            ],
            [   // ＺＥＴＳＵ－Ａ－ main Level1
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 82,
                'level_id' => 1,
            ],
            [   // ＺＥＴＳＵ－Ａ－ main Level2
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 88,
                'level_id' => 2,
            ],
            [   // ＺＥＴＳＵ－Ａ－ main Level3
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 88,
                'level_id' => 3,
            ],
            [   // ＺＥＴＳＵ－Ａ－ main Level4
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 88,
                'level_id' => 4,
            ],
            [   // ＺＥＴＳＵ－Ａ－ main Level5
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 88,
                'level_id' => 5,
            ],
            [   // ＺＥＴＳＵ－Ａ－ sub Level1
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 20,
                'level_id' => 1,
            ],
            [   // ＺＥＴＳＵ－Ａ－ sub Level2
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 34,
                'level_id' => 2,
            ],
            [   // ＺＥＴＳＵ－Ａ－ sub Level3
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 34,
                'level_id' => 3,
            ],
            [   // ＺＥＴＳＵ－Ａ－ sub Level4
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 34,
                'level_id' => 4,
            ],
            [   // ＺＥＴＳＵ－Ａ－ sub Level5
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 34,
                'level_id' => 5,
            ],
            [   // 松風 main Level1
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 83,
                'level_id' => 1,
            ],
            [   // 松風 main Level2
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 2,
            ],
            [   // 松風 main Level3
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 3,
            ],
            [   // 松風 main Level4
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 4,
            ],
            [   // 松風 main Level5
                'heirloom_effect_summary_id' => 147,
                'heirloom_effect_detail_id' => 84,
                'level_id' => 5,
            ],
            [   // 松風 sub Level1
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 1,
            ],
            [   // 松風 sub Level2
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 30,
                'level_id' => 2,
            ],
            [   // 松風 sub Level3
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 3,
            ],
            [   // 松風 sub Level4
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 4,
            ],
            [   // 松風 sub Level5
                'heirloom_effect_summary_id' => 148,
                'heirloom_effect_detail_id' => 13,
                'level_id' => 5,
            ],
            [   // 兵法書
                'heirloom_effect_summary_id' => 151,
                'heirloom_effect_detail_id' => 89,
                'level_id' => 1,
            ],
            [   // 五輪書 main Level1
                'heirloom_effect_summary_id' => 152,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 1,
            ],
            [   // 五輪書 main Level2
                'heirloom_effect_summary_id' => 152,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 2,
            ],
            [   // 五輪書 main Level3
                'heirloom_effect_summary_id' => 152,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 3,
            ],
            [   // 五輪書 sub Level1
                'heirloom_effect_summary_id' => 153,
                'heirloom_effect_detail_id' => 92,
                'level_id' => 1,
            ],
            [   // 五輪書 sub Level2
                'heirloom_effect_summary_id' => 153,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 2,
            ],
            [   // 五輪書 sub Level3
                'heirloom_effect_summary_id' => 153,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 3,
            ],
            [   // 闘戦経 main Level1
                'heirloom_effect_summary_id' => 154,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 1,
            ],
            [   // 闘戦経 main Level2
                'heirloom_effect_summary_id' => 154,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 2,
            ],
            [   // 闘戦経 main Level3
                'heirloom_effect_summary_id' => 154,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 3,
            ],
            [   // 闘戦経 sub Level1
                'heirloom_effect_summary_id' => 155,
                'heirloom_effect_detail_id' => 92,
                'level_id' => 1,
            ],
            [   // 闘戦経 sub Level2
                'heirloom_effect_summary_id' => 155,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 2,
            ],
            [   // 闘戦経 sub Level3
                'heirloom_effect_summary_id' => 155,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 3,
            ],
            [   // 陰徳太平記 main Level1
                'heirloom_effect_summary_id' => 156,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 1,
            ],
            [   // 陰徳太平記 main Level2
                'heirloom_effect_summary_id' => 156,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 2,
            ],
            [   // 陰徳太平記 main Level3
                'heirloom_effect_summary_id' => 156,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 3,
            ],
            [   // 陰徳太平記 sub Level1
                'heirloom_effect_summary_id' => 157,
                'heirloom_effect_detail_id' => 92,
                'level_id' => 1,
            ],
            [   // 陰徳太平記 sub Level2
                'heirloom_effect_summary_id' => 157,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 2,
            ],
            [   // 陰徳太平記 sub Level3
                'heirloom_effect_summary_id' => 157,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 3,
            ],
            [   // 太平要術 main Level1
                'heirloom_effect_summary_id' => 158,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 1,
            ],
            [   // 太平要術 main Level2
                'heirloom_effect_summary_id' => 158,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 2,
            ],
            [   // 太平要術 main Level3
                'heirloom_effect_summary_id' => 158,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 3,
            ],
            [   // 太平要術 sub Level1
                'heirloom_effect_summary_id' => 159,
                'heirloom_effect_detail_id' => 92,
                'level_id' => 1,
            ],
            [   // 太平要術 sub Level2
                'heirloom_effect_summary_id' => 159,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 2,
            ],
            [   // 太平要術 sub Level3
                'heirloom_effect_summary_id' => 159,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 3,
            ],
            [   // 羅生門 main Level1
                'heirloom_effect_summary_id' => 160,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 1,
            ],
            [   // 羅生門 main Level2
                'heirloom_effect_summary_id' => 160,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 2,
            ],
            [   // 羅生門 main Level3
                'heirloom_effect_summary_id' => 160,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 3,
            ],
            [   // 羅生門 sub Level1
                'heirloom_effect_summary_id' => 161,
                'heirloom_effect_detail_id' => 92,
                'level_id' => 1,
            ],
            [   // 羅生門 sub Level2
                'heirloom_effect_summary_id' => 161,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 2,
            ],
            [   // 羅生門 sub Level3
                'heirloom_effect_summary_id' => 161,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 3,
            ],
            [   // 越絶書 main Level1
                'heirloom_effect_summary_id' => 162,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 1,
            ],
            [   // 越絶書 main Level2
                'heirloom_effect_summary_id' => 162,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 2,
            ],
            [   // 越絶書 main Level3
                'heirloom_effect_summary_id' => 162,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 3,
            ],
            [   // 越絶書 sub Level1
                'heirloom_effect_summary_id' => 163,
                'heirloom_effect_detail_id' => 92,
                'level_id' => 1,
            ],
            [   // 越絶書 sub Level2
                'heirloom_effect_summary_id' => 163,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 2,
            ],
            [   // 越絶書 sub Level3
                'heirloom_effect_summary_id' => 163,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 3,
            ],
            [   // 独行道 main Level1
                'heirloom_effect_summary_id' => 164,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 1,
            ],
            [   // 独行道 main Level2
                'heirloom_effect_summary_id' => 164,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 2,
            ],
            [   // 独行道 main Level3
                'heirloom_effect_summary_id' => 164,
                'heirloom_effect_detail_id' => 91,
                'level_id' => 3,
            ],
            [   // 独行道 sub Level1
                'heirloom_effect_summary_id' => 165,
                'heirloom_effect_detail_id' => 92,
                'level_id' => 1,
            ],
            [   // 独行道 sub Level2
                'heirloom_effect_summary_id' => 165,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 2,
            ],
            [   // 独行道 sub Level3
                'heirloom_effect_summary_id' => 165,
                'heirloom_effect_detail_id' => 93,
                'level_id' => 3,
            ],
            [   // 五代之軍記 main Level1
                'heirloom_effect_summary_id' => 166,
                'heirloom_effect_detail_id' => 94,
                'level_id' => 1,
            ],
            [   // 五代之軍記 main Level2
                'heirloom_effect_summary_id' => 166,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 2,
            ],
            [   // 五代之軍記 main Level3
                'heirloom_effect_summary_id' => 166,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 3,
            ],
            [   // 五代之軍記 main Level4
                'heirloom_effect_summary_id' => 166,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 4,
            ],
            [   // 五代之軍記 main Level5
                'heirloom_effect_summary_id' => 166,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 5,
            ],
            [   // 五代之軍記 sub Level1
                'heirloom_effect_summary_id' => 167,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 1,
            ],
            [   // 五代之軍記 sub Level2
                'heirloom_effect_summary_id' => 167,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 2,
            ],
            [   // 五代之軍記 sub Level3
                'heirloom_effect_summary_id' => 167,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 3,
            ],
            [   // 五代之軍記 sub Level4
                'heirloom_effect_summary_id' => 167,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 4,
            ],
            [   // 五代之軍記 sub Level5
                'heirloom_effect_summary_id' => 167,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 5,
            ],
            [   // 金烏玉兎集 main Level1
                'heirloom_effect_summary_id' => 168,
                'heirloom_effect_detail_id' => 94,
                'level_id' => 1,
            ],
            [   // 金烏玉兎集 main Level2
                'heirloom_effect_summary_id' => 168,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 2,
            ],
            [   // 金烏玉兎集 main Level3
                'heirloom_effect_summary_id' => 168,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 3,
            ],
            [   // 金烏玉兎集 main Level4
                'heirloom_effect_summary_id' => 168,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 4,
            ],
            [   // 金烏玉兎集 main Level5
                'heirloom_effect_summary_id' => 168,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 5,
            ],
            [   // 金烏玉兎集 sub Level1
                'heirloom_effect_summary_id' => 169,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 1,
            ],
            [   // 金烏玉兎集 sub Level2
                'heirloom_effect_summary_id' => 169,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 2,
            ],
            [   // 金烏玉兎集 sub Level3
                'heirloom_effect_summary_id' => 169,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 3,
            ],
            [   // 金烏玉兎集 sub Level4
                'heirloom_effect_summary_id' => 169,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 4,
            ],
            [   // 金烏玉兎集 sub Level5
                'heirloom_effect_summary_id' => 169,
                'heirloom_effect_detail_id' => 12,
                'level_id' => 5,
            ],
            [   // 孫子 main Level1
                'heirloom_effect_summary_id' => 170,
                'heirloom_effect_detail_id' => 17,
                'level_id' => 1,
            ],
            [   // 孫子 main Level2
                'heirloom_effect_summary_id' => 170,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 2,
            ],
            [   // 孫子 main Level3
                'heirloom_effect_summary_id' => 170,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 3,
            ],
            [   // 孫子 main Level4
                'heirloom_effect_summary_id' => 170,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 4,
            ],
            [   // 孫子 main Level5
                'heirloom_effect_summary_id' => 170,
                'heirloom_effect_detail_id' => 35,
                'level_id' => 5,
            ],
            [   // 孫子 sub Level1
                'heirloom_effect_summary_id' => 171,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 1,
            ],
            [   // 孫子 sub Level2
                'heirloom_effect_summary_id' => 171,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 2,
            ],
            [   // 孫子 sub Level3
                'heirloom_effect_summary_id' => 171,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 3,
            ],
            [   // 孫子 sub Level4
                'heirloom_effect_summary_id' => 171,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 4,
            ],
            [   // 孫子 sub Level5
                'heirloom_effect_summary_id' => 171,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 5,
            ],
            [   // 海国兵談 main Level1
                'heirloom_effect_summary_id' => 172,
                'heirloom_effect_detail_id' => 98,
                'level_id' => 1,
            ],
            [   // 海国兵談 main Level2
                'heirloom_effect_summary_id' => 172,
                'heirloom_effect_detail_id' => 99,
                'level_id' => 2,
            ],
            [   // 海国兵談 main Level3
                'heirloom_effect_summary_id' => 172,
                'heirloom_effect_detail_id' => 99,
                'level_id' => 3,
            ],
            [   // 海国兵談 main Level4
                'heirloom_effect_summary_id' => 172,
                'heirloom_effect_detail_id' => 99,
                'level_id' => 4,
            ],
            [   // 海国兵談 main Level5
                'heirloom_effect_summary_id' => 172,
                'heirloom_effect_detail_id' => 99,
                'level_id' => 5,
            ],
            [   // 海国兵談 sub Level1
                'heirloom_effect_summary_id' => 173,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 1,
            ],
            [   // 海国兵談 sub Level2
                'heirloom_effect_summary_id' => 173,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 2,
            ],
            [   // 海国兵談 sub Level3
                'heirloom_effect_summary_id' => 173,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 3,
            ],
            [   // 海国兵談 sub Level4
                'heirloom_effect_summary_id' => 173,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 4,
            ],
            [   // 海国兵談 sub Level5
                'heirloom_effect_summary_id' => 173,
                'heirloom_effect_detail_id' => 10,
                'level_id' => 5,
            ],
            [   // 進化の系譜 main Level1
                'heirloom_effect_summary_id' => 174,
                'heirloom_effect_detail_id' => 100,
                'level_id' => 1,
            ],
            [   // 進化の系譜 main Level2
                'heirloom_effect_summary_id' => 174,
                'heirloom_effect_detail_id' => 101,
                'level_id' => 2,
            ],
            [   // 進化の系譜 main Level3
                'heirloom_effect_summary_id' => 174,
                'heirloom_effect_detail_id' => 101,
                'level_id' => 3,
            ],
            [   // 進化の系譜 main Level4
                'heirloom_effect_summary_id' => 174,
                'heirloom_effect_detail_id' => 101,
                'level_id' => 4,
            ],
            [   // 進化の系譜 main Level5
                'heirloom_effect_summary_id' => 174,
                'heirloom_effect_detail_id' => 101,
                'level_id' => 5,
            ],
            [   // 進化の系譜 sub Level1
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 102,
                'level_id' => 1,
            ],
            [   // 進化の系譜 sub Level2
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 103,
                'level_id' => 2,
            ],
            [   // 進化の系譜 sub Level3
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 103,
                'level_id' => 3,
            ],
            [   // 進化の系譜 sub Level4
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 103,
                'level_id' => 4,
            ],
            [   // 進化の系譜 sub Level5
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 103,
                'level_id' => 5,
            ],
            [   // 進化の系譜 detail Level1
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 1,
            ],
            [   // 進化の系譜 detail Level2
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 2,
            ],
            [   // 進化の系譜 detail Level3
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 3,
            ],
            [   // 進化の系譜 detail Level4
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 4,
            ],
            [   // 進化の系譜 detail Level5
                'heirloom_effect_summary_id' => 175,
                'heirloom_effect_detail_id' => 90,
                'level_id' => 5,
            ],
            [   // 三国志 main Level1
                'heirloom_effect_summary_id' => 176,
                'heirloom_effect_detail_id' => 94,
                'level_id' => 1,
            ],
            [   // 三国志 main Level2
                'heirloom_effect_summary_id' => 176,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 2,
            ],
            [   // 三国志 main Level3
                'heirloom_effect_summary_id' => 176,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 3,
            ],
            [   // 三国志 main Level4
                'heirloom_effect_summary_id' => 176,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 4,
            ],
            [   // 三国志 main Level5
                'heirloom_effect_summary_id' => 176,
                'heirloom_effect_detail_id' => 95,
                'level_id' => 5,
            ],
            [   // 三国志 sub Level1
                'heirloom_effect_summary_id' => 177,
                'heirloom_effect_detail_id' => 21,
                'level_id' => 1,
            ],
            [   // 三国志 sub Level2
                'heirloom_effect_summary_id' => 177,
                'heirloom_effect_detail_id' => 21,
                'level_id' => 2,
            ],
            [   // 三国志 sub Level3
                'heirloom_effect_summary_id' => 177,
                'heirloom_effect_detail_id' => 21,
                'level_id' => 3,
            ],
            [   // 三国志 sub Level4
                'heirloom_effect_summary_id' => 177,
                'heirloom_effect_detail_id' => 21,
                'level_id' => 4,
            ],
            [   // 三国志 sub Level5
                'heirloom_effect_summary_id' => 177,
                'heirloom_effect_detail_id' => 21,
                'level_id' => 5,
            ],
            [   // 琥珀 main Level1
                'heirloom_effect_summary_id' => 178,
                'heirloom_effect_detail_id' => 104,
                'level_id' => 1,
            ],
            [   // 琥珀 main Level2
                'heirloom_effect_summary_id' => 178,
                'heirloom_effect_detail_id' => 105,
                'level_id' => 2,
            ],
            [   // 琥珀 main Level3
                'heirloom_effect_summary_id' => 178,
                'heirloom_effect_detail_id' => 106,
                'level_id' => 3,
            ],
            [   // 琥珀 main Level4
                'heirloom_effect_summary_id' => 178,
                'heirloom_effect_detail_id' => 107,
                'level_id' => 4,
            ],
            [   // 琥珀 main Level5
                'heirloom_effect_summary_id' => 178,
                'heirloom_effect_detail_id' => 5,
                'level_id' => 5,
            ],
            [   // 翠玉 main Level1
                'heirloom_effect_summary_id' => 179,
                'heirloom_effect_detail_id' => 108,
                'level_id' => 1,
            ],
            [   // 翠玉 main Level2
                'heirloom_effect_summary_id' => 179,
                'heirloom_effect_detail_id' => 109,
                'level_id' => 2,
            ],
            [   // 翠玉 main Level3
                'heirloom_effect_summary_id' => 179,
                'heirloom_effect_detail_id' => 110,
                'level_id' => 3,
            ],
            [   // 翠玉 main Level4
                'heirloom_effect_summary_id' => 179,
                'heirloom_effect_detail_id' => 111,
                'level_id' => 4,
            ],
            [   // 翠玉 main Level5
                'heirloom_effect_summary_id' => 179,
                'heirloom_effect_detail_id' => 112,
                'level_id' => 5,
            ],
            [   // 紅玉 main Level1
                'heirloom_effect_summary_id' => 180,
                'heirloom_effect_detail_id' => 49,
                'level_id' => 1,
            ],
            [   // 紅玉 main Level2
                'heirloom_effect_summary_id' => 180,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 2,
            ],
            [   // 紅玉 main Level3
                'heirloom_effect_summary_id' => 180,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 3,
            ],
            [   // 紅玉 main Level4
                'heirloom_effect_summary_id' => 180,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 4,
            ],
            [   // 紅玉 main Level5
                'heirloom_effect_summary_id' => 180,
                'heirloom_effect_detail_id' => 50,
                'level_id' => 5,
            ],
            [   // 黄水晶 main Level1
                'heirloom_effect_summary_id' => 181,
                'heirloom_effect_detail_id' => 72,
                'level_id' => 1,
            ],
            [   // 黄水晶 main Level2
                'heirloom_effect_summary_id' => 181,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 2,
            ],
            [   // 黄水晶 main Level3
                'heirloom_effect_summary_id' => 181,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 3,
            ],
            [   // 黄水晶 main Level4
                'heirloom_effect_summary_id' => 181,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 4,
            ],
            [   // 黄水晶 main Level5
                'heirloom_effect_summary_id' => 181,
                'heirloom_effect_detail_id' => 73,
                'level_id' => 5,
            ],
            [   // 蒼玉 main Level1
                'heirloom_effect_summary_id' => 182,
                'heirloom_effect_detail_id' => 113,
                'level_id' => 1,
            ],
            [   // 蒼玉 main Level2
                'heirloom_effect_summary_id' => 182,
                'heirloom_effect_detail_id' => 114,
                'level_id' => 2,
            ],
            [   // 蒼玉 main Level3
                'heirloom_effect_summary_id' => 182,
                'heirloom_effect_detail_id' => 114,
                'level_id' => 3,
            ],
            [   // 蒼玉 main Level4
                'heirloom_effect_summary_id' => 182,
                'heirloom_effect_detail_id' => 114,
                'level_id' => 4,
            ],
            [   // 蒼玉 main Level5
                'heirloom_effect_summary_id' => 182,
                'heirloom_effect_detail_id' => 114,
                'level_id' => 5,
            ],
            [   // 紫石英 main Level1
                'heirloom_effect_summary_id' => 183,
                'heirloom_effect_detail_id' => 115,
                'level_id' => 1,
            ],
            [   // 紫石英 main Level2
                'heirloom_effect_summary_id' => 183,
                'heirloom_effect_detail_id' => 116,
                'level_id' => 2,
            ],
            [   // 紫石英 main Level3
                'heirloom_effect_summary_id' => 183,
                'heirloom_effect_detail_id' => 116,
                'level_id' => 3,
            ],
            [   // 紫石英 main Level4
                'heirloom_effect_summary_id' => 183,
                'heirloom_effect_detail_id' => 116,
                'level_id' => 4,
            ],
            [   // 紫石英 main Level5
                'heirloom_effect_summary_id' => 183,
                'heirloom_effect_detail_id' => 116,
                'level_id' => 5,
            ],
        ];

        HeirloomEffectSummaryMapping::upsert(
            $heirloomEffectSummaryMappings,
            ['heirloom_effect_summary_id', 'heirloom_effect_detail_id', 'level_id'],
            []
        );
    }
}
