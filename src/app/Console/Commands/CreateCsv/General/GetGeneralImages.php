<?php

namespace App\Console\Commands\CreateCsv\General;

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
    protected $description = '武将の画像をhtmlから取得してストレージの保存するコマンド';

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // ディレクトリパスの生成（Storageファサード用相対パス）
        $cardDirectory = 'generals/cards';
        $cardSmallDirectory = 'generals/card_smalls';

        $imagePath = $cardDirectory."/{$generalId['id']}.png";
        $imageSmallPath = $cardSmallDirectory."/{$generalId['id']}_small.png";

        // カードの画像を保存
        // .card_image直下のimgタグを取得（前後の矢印画像を除外するため）
        if ($crawler->filter('.card_image > img')->count()) {
            $cardImageUrl = $crawler->filter('.card_image > img')->attr('src');
            $cardImageContents = file_get_contents($cardImageUrl);

            if ($cardImageContents !== false) {
                Storage::disk('public')->put($imagePath, $cardImageContents);
                $this->info("画像を保存しました: {$imagePath}");
            }
        }
        // カード（小）の画像を保存
        if ($crawler->filter('.card_small')->count()) {
            $cardSmallImageUrl = $crawler->filter('.card_small')->attr('src');
            $cardSmallImageContents = file_get_contents($cardSmallImageUrl);

            if ($cardSmallImageContents !== false) {
                Storage::disk('public')->put($imageSmallPath, $cardSmallImageContents);
                $this->info("画像を保存しました: {$imageSmallPath}");
            }
        }
    }
}
