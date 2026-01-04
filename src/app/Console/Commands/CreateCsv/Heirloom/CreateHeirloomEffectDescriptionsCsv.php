<?php

namespace App\Console\Commands\CreateCsv\Heirloom;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateHeirloomEffectDescriptionsCsv extends BaseHeirloomHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-heirloom-effect-descriptions-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '戦器の効果説明をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $heirloomEffectDescriptions = [];

    protected function processHeirloom(Crawler $crawler, array $heirloomId): void
    {
        // 主効果の説明を取得
        if ($crawler->filter('.main .detail')->count() > 0) {
            $this->heirloomEffectDescriptions[] = [
                $heirloomId['id'],
                trim($crawler->filter('.main .detail')->text()),
            ];
        }

        // 追加効果の説明を取得
        if ($crawler->filter('.sub .detail')->count() > 0) {
            $this->heirloomEffectDescriptions[] = [
                $heirloomId['id'],
                trim($crawler->filter('.sub .detail')->text()),
            ];
        }
    }

    /**
     * 後処理
     */
    protected function afterProcessing(): void
    {
        // ヘッダーの定義
        $headers = [
            'heirloom_id',
            'heirloom_effect_description',
        ];

        $path = Storage::path('csv/heirlooms/heirloom-effect-descriptions.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->heirloomEffectDescriptions);

        $this->info("CSV出力完了: {$path}");
    }
}
