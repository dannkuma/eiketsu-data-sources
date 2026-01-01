<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateStrategyNameFuriganasCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-strategy-name-furiganas-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '計略名のフリガナをhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $strategyNameFuriganas = [];

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $this->strategyNameFuriganas[] = [
            $generalId['id'],
            $crawler->filter('.p-strat__title ruby rt')->count() ? $crawler->filter('.p-strat__title ruby rt')->text() : '',
        ];
    }

    /**
     * 後処理
     */
    protected function afterProcessing(): void
    {
        // ヘッダーの定義
        $headers = [
            'id',
            'strategy_name_furigana',
        ];

        $path = Storage::path('csv/generals/strategy-name-furiganas.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->strategyNameFuriganas);

        $this->info("CSV出力完了: {$path}");
    }
}
