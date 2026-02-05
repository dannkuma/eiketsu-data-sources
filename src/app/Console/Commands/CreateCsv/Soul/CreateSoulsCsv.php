<?php

namespace App\Console\Commands\CreateCsv\Soul;

use App\Enums\Rarities;
use App\Enums\Souls\SoulPurchaseAmounts;
use App\Enums\Souls\SoulSaleAmounts;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateSoulsCsv extends BaseSoulHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-souls-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '英魂をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $souls = [];

    protected function processSoul(Crawler $crawler, array $soulId): void
    {
        $soulRarity = $crawler->filter('.name .rarity')->count() ? $crawler->filter('.name .rarity')->attr('alt') : '';
        // CSVデータの抽出
        $this->souls[] = [
            $soulId['id'],
            $this->extractTextWithoutTags($crawler, '.name', 'img'),
            $soulRarity,
            match ($soulRarity) {
                Rarities::R->label() => SoulPurchaseAmounts::OneHundred->value,
                Rarities::SR->label() => SoulPurchaseAmounts::FiveHundred->value,
                default => '',
            },
            match ($soulRarity) {
                Rarities::R->label() => SoulSaleAmounts::Fifty->value,
                Rarities::SR->label() => SoulSaleAmounts::TwoHundredFifty->value,
                default => '',
            },
        ];
    }

    /**
     * 後処理
     */
    protected function afterProcessing(): void
    {
        // ヘッダーの定義
        $headers = [
            'soul_id',
            'soul_name',
            'rarity',
            'soul_purchase_amount',
            'soul_sale_amount',
        ];

        $path = Storage::path('csv/souls/souls.csv');

        // CSV Writerの生成
        $writer = $this->csvManager->createCsvWriter($path);
        $this->csvManager->insertHeader($writer, $headers);
        $this->csvManager->insertAll($writer, $this->souls);

        $this->info("CSV出力完了: {$path}");
    }
}
