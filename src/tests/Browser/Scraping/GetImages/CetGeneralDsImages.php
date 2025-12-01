<?php

namespace Tests\Browser\Scraping\GetImages;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Symfony\Component\DomCrawler\Crawler;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class CetGeneralDsImages extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $response = Http::get('https://eiketsu-taisen.net/datalist/api/base');
        $json_data = $response->json();
        $general_small = collect($json_data['general'])
            ->map(fn($v) => explode(',', $v)[0] ?? null);
        $general_ds = collect($json_data['general'])
            ->map(fn($v) => explode(',', $v)[1] ?? null);
        // 小さい画像の保存
        $general_small->values()->each(function ($id, $index) {
            $fileNumber = $index + 1;

            // 画像URLを作成
            $url = "https://image.eiketsu-taisen.net/general/card_small/{$id}.jpg?250724a";

            // 画像取得
            $response = Http::get($url);

            if ($response->ok()) {
                // Storage に保存 (storage/app/public/general/)
                $filename = "general/{$fileNumber}.jpg";
                Storage::disk('public')->put($filename, $response->body());
                echo "Saved: {$filename}\n";
            } else {
                echo "Failed to fetch: {$url}\n";
            }

            // サイト負荷対策の待機時間（例：1秒）
            sleep(1);
        });
        // 両面画像の保存
    }
}
