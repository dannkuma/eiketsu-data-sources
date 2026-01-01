<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateGeneralGetMethodsCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-general-get-methods-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将入手手段をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $generalGetMethods = [];

    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $dts = $crawler->filter('.appear_pattern dl dt');
        $dds = $crawler->filter('.appear_pattern dl dd');

        $dts->each(function (Crawler $node, $i) use ($dds, $generalId) {
            $getMethod = trim(str_replace('？', '', $node->text()));

            if ($dds->count() <= $i) {
                return;
            }

            $providedDates = $dds->eq($i)->text();
            // ～より前の日付部分を取得
            $parts = explode('～', $providedDates);
            $startDate = trim($parts[0]);
            // ～より後の日付部分を取得
            $EndDate = isset($parts[1]) ? trim($parts[1]) : '';

            $this->generalGetMethods[] = [
                $generalId['id'],
                $getMethod,
                $startDate,
                $EndDate,
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
            'get_method',
            'general_provided_start',
            'general_provided_end',
        ];

        $path = Storage::path('csv/generals/general-get-methods.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->generalGetMethods);

        $this->info("CSV出力完了: {$path}");
    }
}
