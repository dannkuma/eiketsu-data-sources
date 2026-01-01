<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateGeneralProvidedStartsCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-general-provided-starts-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将提供開始日をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $generalProvidedStarts = [];

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $crawler->filter('.appear_pattern dl dd')->each(function (Crawler $node) use ($generalId) {
            $text = $node->text();
            // ～より前の日付部分を取得
            $parts = explode('～', $text);
            $startDate = trim($parts[0]);

            $this->generalProvidedStarts[] = [
                $generalId['id'],
                $startDate,
            ];
        });
    }

    /**
     * 後処理
     */
    protected function afterProcessing(): void
    {
        // ヘッダーの定義
        $headers = [
            'general_id',
            'general_provided_start',
        ];

        $path = Storage::path('csv/generals/general-provided-starts.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->generalProvidedStarts);

        $this->info("CSV出力完了: {$path}");
    }
}
