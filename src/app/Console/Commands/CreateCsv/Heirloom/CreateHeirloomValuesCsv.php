<?php

namespace App\Console\Commands\CreateCsv\Heirloom;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateHeirloomValuesCsv extends BaseHeirloomHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-heirloom-values-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '戦器の値をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $heirloomValues = [];

    protected function processHeirloom(Crawler $crawler, array $heirloomId): void
    {
        $crawler->filter('.param')->each(function (Crawler $node) {
            $this->heirloomValues[] = [
                trim($node->text()),
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
            'heirloom_value',
        ];
        $uniqueHeirloomValues = $this->leagueCsvService->uniqueByColumn($this->heirloomValues, 0);
        $path = Storage::path('csv/heirlooms/heirloom-values.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $uniqueHeirloomValues);

        $this->info("CSV出力完了: {$path}");
    }
}
