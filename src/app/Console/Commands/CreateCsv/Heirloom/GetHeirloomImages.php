<?php

namespace App\Console\Commands\CreateCsv\Heirloom;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class GetHeirloomImages extends BaseHeirloomHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-heirloom-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '戦器の画像をhtmlから取得してストレージに保存するコマンド';

    /**
     * 各戦器ごとの処理
     */
    protected function processHeirloom(Crawler $crawler, array $heirloomId): void
    {
        // ディレクトリパスの生成（公開ディスク用の相対パス）
        $cardDirectory = 'heirlooms/images';

        $imagePath = $cardDirectory."/{$heirloomId['id']}.png";

        // 戦器の画像を保存
        // .image直下のimgタグを取得（前後の矢印画像を除外するため）
        if ($crawler->filter('.image > img')->count()) {
            $heirloomImageUrl = $crawler->filter('.image > img')->attr('src');

            // ドメイン検証
            if (str_starts_with($heirloomImageUrl, 'https://image.eiketsu-taisen.net/')) {
                $response = Http::timeout(10)->get($heirloomImageUrl);

                if ($response->successful()) {
                    Storage::disk('public')->put($imagePath, $response->body());
                    $this->info("画像を保存しました: {$imagePath}");
                } else {
                    $this->warn("画像の取得に失敗したため保存をスキップしました ({$response->status()}): {$heirloomImageUrl}");
                }
            } else {
                $this->warn("不正なドメインのためスキップしました: {$heirloomImageUrl}");
            }
        }
    }
}
