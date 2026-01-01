<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateCharacterVoicesCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-character-voices-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '声優名をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $characterVoices = [];

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        $this->characterVoices[] = [
            $generalId['id'],
            $crawler->filter('.illust_cv button')->count() ? str_replace('CV:', '', $crawler->filter('.illust_cv button')->eq(1)->text()) : '',
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
            'character_voice',
        ];

        $path = Storage::path('csv/generals/character-voices.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->characterVoices);

        $this->info("CSV出力完了: {$path}");
    }
}
