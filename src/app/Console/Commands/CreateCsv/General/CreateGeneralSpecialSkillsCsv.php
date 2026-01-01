<?php

namespace App\Console\Commands\CreateCsv\General;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class CreateGeneralSpecialSkillsCsv extends BaseGeneralHtmlCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-general-special-skills-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '武将特技をhtmlから取得してCSVに保存するコマンド';

    /**
     * 抽出結果を格納する配列
     */
    protected array $generalSpecialSkills = [];

    /**
     * 各武将ごとの処理
     */
    protected function processGeneral(Crawler $crawler, array $generalId): void
    {
        // CSVデータの抽出
        $crawler->filter('.skill')->each(function (Crawler $node) use ($generalId) {
            $specialSkill = $node->text();

            $this->generalSpecialSkills[] = [
                $generalId['id'],
                $specialSkill,
            ];
        });
    }

    protected function afterProcessing(): void
    {
        // ヘッダーの定義
        $headers = [
            'general_id',
            'special_skill',
        ];

        $path = Storage::path('csv/generals/general-special-skills.csv');

        // CSV Writerの生成
        $writer = $this->leagueCsvService->createCsvWriter($path);
        $this->leagueCsvService->insertHeader($writer, $headers);
        $this->leagueCsvService->insertAll($writer, $this->generalSpecialSkills);
        $this->info("CSV出力完了: {$path}");
    }
}
