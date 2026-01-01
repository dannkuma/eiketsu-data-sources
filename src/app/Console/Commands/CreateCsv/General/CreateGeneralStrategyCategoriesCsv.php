<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateGeneralStrategyCategoriesCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-general-strategy-categories-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将計略カテゴリをhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $generalStrategyCategories = [];

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $crawler->filter('.p-strat__prop .p-strat__column')->each(function (Crawler $node) use ($generalId) {
            $text = $node->text();
            if (str_contains($text, 'カテゴリー：')) {
                $categoryText = str_replace('カテゴリー：', '', $text);
                // カンマで分割
                $categories = explode(',', $categoryText);
                // 空白除去
                $categories = array_map('trim', $categories);

                foreach ($categories as $category) {
                    if ($category === '') {
                        continue;
                    }
                    $this->generalStrategyCategories[] = [
                        $generalId['id'],
                        $category,
                    ];
                }
            }
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
            'strategy_category',
        ];

        $path = Storage::path('csv/generals/general-strategy-categories.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->generalStrategyCategories);

        $this->info("CSV出力完了: {$path}");
    }
}
