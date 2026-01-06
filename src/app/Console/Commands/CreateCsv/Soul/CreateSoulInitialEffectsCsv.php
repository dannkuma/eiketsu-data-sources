<?php

namespace App\Console\Commands\CreateCsv\Soul;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateSoulInitialEffectsCsv extends BaseSoulHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-soul-initial-effects-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '英魂初期効果をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $soulInitialEffects = [];

    protected function processSoul(Crawler $crawler, array $soulId): void
    {
        $crawler->filter('.c-sec__text')->each(function (Crawler $node) use ($soulId) {
            $text = trim($node->text());

            if (preg_match('/^([^\+\-＋－\d]+)([＋\+\-－])([\d\.]+)(.*)$/u', $text, $matches)) {
                $this->soulInitialEffects[] = [
                    $soulId['id'],
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
            'soul_id',
            'soul_effect_category', // 速度
            'soul_effect_operator', // +
            'soul_value', // 5
            'soul_effect_unit', // %
        ];

        $path = Storage::path('csv/souls/soul-initial-effects.csv');

        // CSV Writerの生成
        $writer = $this->csvManager->createCsvWriter($path);
        $this->csvManager->insertHeader($writer, $headers);
        $this->csvManager->insertAll($writer, $this->soulInitialEffects);

        $this->info("CSV出力完了: {$path}");
    }
}
