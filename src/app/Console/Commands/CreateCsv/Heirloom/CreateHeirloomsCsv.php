<?php

namespace App\Console\Commands\CreateCsv\Heirloom;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateHeirloomsCsv extends BaseHeirloomHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-heirlooms-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '戦器をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $heirlooms = [];

    protected function processHeirloom(Crawler $crawler, array $heirloomId): void
    {
        // CSVデータの抽出
        $this->heirlooms[] = [
            $heirloomId['id'],
            $this->extractTextWithoutRuby($crawler, '.name ruby'),
            $crawler->filter('.name rt')->count() ? $crawler->filter('.name rt')->text() : '',
            $crawler->filter('.rarity')->count() ? $crawler->filter('.rarity')->attr('alt') : '',
            $crawler->filter('.category')->count() ? $crawler->filter('.category')->attr('alt') : '',
        ];
    }

    /**
     * 後処理
     */
    protected function afterProcessing(): void
    {
        // ヘッダーの定義
        $headers = [
            'heirloom_id',
            'heirloom_name',
            'heirloom_name_furigana',
            'rarity',
            'heirloom_soul_classification',
        ];

        $path = Storage::path('csv/heirlooms/heirlooms.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->heirlooms);

        $this->info("CSV出力完了: {$path}");
    }
}
