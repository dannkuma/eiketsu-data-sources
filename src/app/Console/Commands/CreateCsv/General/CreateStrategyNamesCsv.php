<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateStrategyNamesCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-strategy-names-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将の計略名をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $strategyNames = [];

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $this->strategyNames[] = [
            $generalId['id'],
            $this->extractTextWithoutRuby($crawler, '.p-strat__title ruby'),
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
            'strategy_name',
        ];

        $path = Storage::path('csv/generals/strategy-names.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->strategyNames);

        $this->info("CSV出力完了: {$path}");
    }
}
