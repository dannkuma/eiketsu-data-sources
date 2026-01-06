<?php

namespace App\Console\Commands\CreateCsv\Soul;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class GetSoulImages extends BaseSoulHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-soul-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '英魂の画像をhtmlから取得してストレージに保存するコマンド';

    /**
     * 各英魂ごとの処理
     */
    protected function processSoul(Crawler $crawler, array $soulId): void
    {
        // ディレクトリパスの生成（公開ディスク用の相対パス）
        $cardDirectory = 'souls/images';

        $imagePath = $cardDirectory."/{$soulId['id']}.png";

        // 英魂の画像を保存
        // .image直下のimgタグを取得（前後の矢印画像を除外するため）
        if ($crawler->filter('.image > img')->count()) {
            $soulImageUrl = $crawler->filter('.image > img')->attr('src');

            // ドメイン検証
            if (str_starts_with($soulImageUrl, 'https://image.eiketsu-taisen.net/')) {
                $response = Http::timeout(10)->get($soulImageUrl);

                if ($response->successful()) {
                    Storage::disk('public')->put($imagePath, $response->body());
                    $this->info("画像を保存しました: {$imagePath}");
                } else {
                    $this->warn("画像の取得に失敗したため保存をスキップしました ({$response->status()}): {$soulImageUrl}");
                }
            } else {
                $this->warn("不正なドメインのためスキップしました: {$soulImageUrl}");
            }
        }
    }
}
