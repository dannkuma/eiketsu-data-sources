<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class GetGeneralImages extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-general-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将の画像をhtmlから取得してストレージに保存するコマンド';

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // ディレクトリパスの生成（公開ディスク用の相対パス）
        $cardDirectory = 'generals/cards';
        $cardSmallDirectory = 'generals/card_smalls';

        $imagePath = $cardDirectory."/{$generalId['id']}.png";
        $imageSmallPath = $cardSmallDirectory."/{$generalId['id']}_small.png";

        // カードの画像を保存
        // .card_image直下のimgタグを取得（前後の矢印画像を除外するため）
        if ($crawler->filter('.card_image > img')->count()) {
            $cardImageUrl = $crawler->filter('.card_image > img')->attr('src');

            // ドメイン検証
            if (str_starts_with($cardImageUrl, 'https://image.eiketsu-taisen.net/')) {
                $content = Http::timeout(10)->get($cardImageUrl)->body();
                Storage::disk('public')->put($imagePath, $content);
                $this->info("画像を保存しました: {$imagePath}");
            } else {
                $this->warn("不正なドメインのためスキップしました: {$cardImageUrl}");
            }
        }
        // カード（小）の画像を保存
        if ($crawler->filter('.card_small')->count()) {
            $cardSmallImageUrl = $crawler->filter('.card_small')->attr('src');

            // ドメイン検証
            if (str_starts_with($cardSmallImageUrl, 'https://image.eiketsu-taisen.net/')) {
                $content = Http::timeout(10)->get($cardSmallImageUrl)->body();
                Storage::disk('public')->put($imageSmallPath, $content);
                $this->info("画像を保存しました: {$imageSmallPath}");
            } else {
                $this->warn("不正なドメインのためスキップしました: {$cardSmallImageUrl}");
            }
        }
    }
}
