<?php

namespace App\Console\Commands\CreateCsv\Heirloom;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateHeirloomEffectsCsv extends BaseHeirloomHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-heirloom-effects-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '戦器効果をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $heirloomEffects = [];

    protected function processHeirloom(Crawler $crawler, array $heirloomId): void
    {
        // .effect_type (行) ごとにループ
        $crawler->filter('.effect_type')->each(function (Crawler $row) {
            // カテゴリ名を取得 (例: 復活)
            $category = $row->filter('.system')->count() > 0 ? trim($row->filter('.system')->text()) : '';

            // 直前の行を取得して、time_extend などの注釈情報を取得しておく
            $notes = [];
            $previousRow = $row->previousAll()->first();

            // 直前の行が存在し、かつ effect_type_category ヘッダーを持っている場合のみ処理
            if ($previousRow->count() > 0 && $previousRow->filter('.effect_type_category')->count() > 0) {
                // td を順に取得して配列に格納
                $previousRow->filter('td')->each(function (Crawler $td, $index) use (&$notes) {
                    // .time_extend クラスを持つ場合、そのテキストを取得
                    if ($td->filter('.time_extend')->count() > 0) {
                        $notes[$index] = trim($td->text());
                    } else {
                        $notes[$index] = '';
                    }
                });
            }

            // その行内の .param (値) をループ
            $row->filter('.param')->each(function (Crawler $node, $i) use ($category, $notes) {
                $text = trim($node->text());
                $note = $notes[$i] ?? ''; // 対応するインデックスの注釈を取得

                // 正規表現で分割
                if (preg_match('/^([+\-○]?)([\d\.]+)?(.*)$/u', $text, $matches)) {
                    $this->heirloomEffects[] = [
                        $category, // heirloom_effect_category
                        $matches[1], // operator (+, -, ○)
                        $matches[2], // value (22, 0.75)
                        $matches[3], // unit (%, 倍, 秒)
                        $note,       // note (効果時間延長など)
                    ];
                }
            });
        });
    }

    /**
     * 後処理
     */
    protected function afterProcessing(): void
    {
        // ヘッダーの定義
        $headers = [
            'heirloom_effect_category',
            'heirloom_effect_operator',
            'heirloom_value',
            'heirloom_effect_unit',
            'heirloom_enhancement_type',
        ];

        $path = Storage::path('csv/heirlooms/heirloom-effects.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);

        // 全カラムの組み合わせで重複排除
        $uniqueEffects = $this->leagueCsvService->uniqueByColumn($this->heirloomEffects, [0, 1, 2, 3, 4]);
        $this->leagueCsvService->insertAll($writer, $uniqueEffects);

        $this->info("CSV出力完了: {$path}");
    }
}
