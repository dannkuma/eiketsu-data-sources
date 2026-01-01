<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateIllustrationsCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-illustrations-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'イラストレーターをhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $illustrations = [];

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $this->illustrations[] = [
            $generalId['id'],
            $crawler->filter('.illust_cv button')->count() ? str_replace('Illustration:', '', $crawler->filter('.illust_cv button')->first()->text()) : '',
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
            'illustration',
        ];

        $path = Storage::path('csv/generals/illustrations.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->illustrations);
        $this->info("CSV出力完了: {$path}");
    }
}
