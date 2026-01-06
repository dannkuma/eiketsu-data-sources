<?php

namespace App\Console\Commands\CreateCsv\Soul;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateSoulEffectsCsv extends BaseSoulHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-soul-effects-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '英魂効果をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $soulEffects = [];

    protected function processSoul(Crawler $crawler, array $soulId): void
    {
        $crawler->filter('.c-sec__text')->each(function (Crawler $node) {
            $text = trim($node->text());

            if (preg_match('/^([^\+\-＋－\d]+)([＋\+\-－])([\d\.]+)(.*)$/u', $text, $matches)) {
                $this->soulEffects[] = [
                    trim($matches[1]), // soul_effect_category (速度)
                    $matches[2],       // soul_effect_operator (＋)
                    $matches[3],       // soul_value (5)
                    trim($matches[4]), // soul_effect_unit (％)
                ];
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
            'soul_effect_category', // 速度
            'soul_effect_operator', // +
            'soul_value', // 5
            'soul_effect_unit', // %
        ];

        // 重複排除
        $uniqueSoulEffects = array_unique($this->soulEffects, SORT_REGULAR);

        $path = Storage::path('csv/souls/soul-effects.csv');

        // CSV Writerの生成
        $writer = $this->csvManager->createCsvWriter($path);
        $this->csvManager->insertHeader($writer, $headers);
        $this->csvManager->insertAll($writer, $uniqueSoulEffects);

        $this->info("CSV出力完了: {$path}");
    }
}
