<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateGeneralProvidedEndsCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-general-provided-ends-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将提供終了日をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $generalProvidedEnds = [];

    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $crawler->filter('.appear_pattern dl dd')->each(function (Crawler $node) use ($generalId) {
            $text = $node->text();
            // ～より後の日付部分を取得
            $parts = explode('～', $text);
            $endDate = trim($parts[1]) ? trim($parts[1]) : '';

            $this->generalProvidedEnds[] = [
                $generalId['id'],
                $endDate,
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
            'general_provided_end',
        ];

        $path = Storage::path('csv/generals/general-provided-ends.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->generalProvidedEnds);
        $this->info("CSV出力完了: {$path}");
    }
}
