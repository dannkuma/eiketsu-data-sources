<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateStrategyOverviewsCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-strategy-overviews-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '計略概要をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $strategyOverviews = [];

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $this->strategyOverviews[] = [
            $generalId['id'],
            $crawler->filter('.p-strat__full .p-strat__column')->count() ? (function () use ($crawler) {
                $node = $crawler->filter('.p-strat__full .p-strat__column')->getNode(0);
                // 子要素を走査してrtタグを削除
                $childNodes = iterator_to_array($node->childNodes);
                foreach ($childNodes as $child) {
                    if ($child->nodeName === 'strong') {
                        $node->removeChild($child);
                    }
                }

                return $node->textContent;
            })() : '',
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
            'strategy_overview',
        ];

        $path = Storage::path('csv/generals/strategy_overviews.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->strategyOverviews);
    }
}
