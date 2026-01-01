<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateGeneralsCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-generals-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将情報をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $generals = [];

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $this->generals[] = [
            $generalId['id'],
            $crawler->filter('.name')->count() ? (function () use ($crawler) {
                $node = $crawler->filter('.name')->getNode(0);
                // 子要素を走査してrtタグを削除
                $childNodes = iterator_to_array($node->childNodes);
                foreach ($childNodes as $child) {
                    if ($child->nodeName === 'rt') {
                        $node->removeChild($child);
                    }
                }

                return $node->textContent;
            })() : '',
            $crawler->filter('.name')->count() ? $crawler->filter('.name')->attr('data-ruby') : '',
            $crawler->filter('.color img')->count() ? $crawler->filter('.color img')->attr('alt') : '',
            $crawler->filter('.appear')->count() ? (function () use ($crawler) {
                $text = $crawler->filter('.appear')->text();
                if (preg_match('/^([^-]+)-/', $text, $matches)) {
                    return $matches[1];
                }

                return $text;
            })() : '',
            $crawler->filter('.number')->count() ? (function () use ($crawler) {
                $text = $crawler->filter('.number')->text();
                // 先頭のアルファベット部分のみを抽出 (例: ST001 -> ST)
                if (preg_match('/^([A-Za-z]+)/', $text, $matches)) {
                    return $matches[1];
                }

                return $text;
            })() : '',
            $crawler->filter('.rarity')->count() ? $crawler->filter('.rarity')->first()->attr('alt') : '',
            $crawler->filter('.period')->count() ? $crawler->filter('.period')->text() : '',
            $crawler->filter('.unit_type')->count() ? $crawler->filter('.unit_type')->attr('alt') : '',
            $crawler->filter('.cost')->count() ? $crawler->filter('.cost')->text() : '',
            $crawler->filter('.strong')->count() ? (function () use ($crawler) {
                $text = $crawler->filter('.strong')->text();
                // スラッシュの前半部分（武力）を抽出 (例: 9/7 -> 9)
                if (preg_match('/^([^\/]+)\//', $text, $matches)) {
                    return $matches[1];
                }

                return $text;
            })() : '',
            $crawler->filter('.intelligence')->count() ? (function () use ($crawler) {
                $text = $crawler->filter('.intelligence')->text();
                // スラッシュの後半部分（知力）を抽出 (例: 9/7 -> 7)
                if (preg_match('/\/([^\/]+)$/', $text, $matches)) {
                    return $matches[1];
                }

                return $text;
            })() : '',
            $crawler->filter('.p-strat__title ruby')->count() ? (function () use ($crawler) {
                $node = $crawler->filter('.p-strat__title ruby')->getNode(0);
                $text = '';
                foreach ($node->childNodes as $child) {
                    if ($child->nodeName !== 'rt') {
                        $text .= $child->textContent;
                    }
                }

                return trim($text);
            })() : '',
            $crawler->filter('.mincho ruby rt')->count() ? $crawler->filter('.mincho ruby rt')->text() : '',
            $crawler->filter('.strat_mp')->count() ? (function () use ($crawler) {
                $text = $crawler->filter('.strat_mp')->text();
                // 括弧内の数値を抽出 (例: 【5】 -> 5)
                if (preg_match('/【(\d+)】/', $text, $matches)) {
                    return $matches[1];
                }

                return $text;
            })() : '',
            $crawler->filter('.p-strat__column')->eq(2)->count() ? (function () use ($crawler) {
                $node = $crawler->filter('.p-strat__column')->eq(2);

                // strongタグのテキスト（例: "効果時間："）を取得して削除し、値のみ返す
                return str_replace($node->filter('strong')->text(), '', $node->text());
            })() : '',
            $crawler->filter('.p-strat__column')->eq(4)->count() ? (function () use ($crawler) {
                $node = $crawler->filter('.p-strat__column')->eq(4);

                // strongタグのテキスト（例: "説明："）を取得して削除し、値のみ返す
                return str_replace($node->filter('strong')->text(), '', $node->text());
            })() : '',
            $crawler->filter('.illust_cv button')->count() ? str_replace('Illustration:', '', $crawler->filter('.illust_cv button')->first()->text()) : '',
            $crawler->filter('.illust_cv button')->count() ? str_replace('CV:', '', $crawler->filter('.illust_cv button')->eq(1)->text()) : '',
            $crawler->filter('.range img')->count() ? (function () use ($crawler) {
                $src = $crawler->filter('.range img')->attr('src');
                // icon/ と .png の間の文字列を抽出
                if (preg_match('/icon\/([^\.]+)\.png/', $src, $matches)) {
                    return $matches[1];
                }

                return '';
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
            'general_name',
            'general_name_furigana',
            'faction_color',
            'release_est',
            'card_type',
            'rarity',
            'period',
            'unit_type',
            'cost',
            'power',
            'intelligence',
            'strategy_name',
            'strategy_name_furigana',
            'required_energy',
            'strategy_effect_time',
            'strategy_overview',
            'illustration',
            'character_voice',
            'effect_range',
        ];

        $path = Storage::path('csv/generals/generals.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->generals);

        $this->info("CSV出力完了: {$path}");
    }
}
