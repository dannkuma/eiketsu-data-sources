<?php

namespace App\Console\Commands\CreateCsv\Heirloom;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateHeirloomEffectSummariesCsv extends BaseHeirloomHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-heirloom-effect-summaries-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '戦器の効果概要をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $heirloomEffectSummaries = [];

    protected function processHeirloom(Crawler $crawler, array $heirloomId): void
    {
        // 主効果の説明を取得
        if ($crawler->filter('.main .detail')->count() > 0) {
            $this->heirloomEffectSummaries[] = [
                $heirloomId['id'],
                trim($crawler->filter('.main .detail')->text()),
                trim($crawler->filter('.system')->eq(0)->text()),
                '',
                trim($crawler->filter('.main dl dd')->text()),
                0,
            ];
        }

        // 追加効果の説明を取得
        if ($crawler->filter('.sub .detail')->count() > 0) {
            $this->heirloomEffectSummaries[] = [
                $heirloomId['id'],
                trim($crawler->filter('.sub .detail')->text()),
                trim($crawler->filter('.system')->eq(1)->text()),
                $crawler->filter('.sub .caption')->count() > 0 ? trim($crawler->filter('.sub .caption')->text()) : '',
                trim($crawler->filter('.sub dl dd')->text()),
                1,
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
            'heirloom_effect_category',
            'activation_condition',
            'effect_target',
            'effect_classification',
        ];

        $path = Storage::path('csv/heirlooms/heirloom-effect-summaries.csv');

        // CSV Writerの生成
        $writer = $this->csvManager->createCsvWriter($path);
        $this->csvManager->insertHeader($writer, $headers);
        $this->csvManager->insertAll($writer, $this->heirloomEffectSummaries);

        $this->info("CSV出力完了: {$path}");
    }
}
