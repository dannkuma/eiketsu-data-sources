<?php

namespace App\Console\Commands\CreateCsv\General;

use App\Services\LeagueCsvService;
use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;

abstract class BaseGeneralHtmlCommand extends Command
{
    protected LeagueCsvService $leagueCsvService;

    public function __construct()
    {
        parent::__construct();
        $this->leagueCsvService = app(LeagueCsvService::class);
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            // 武将IDCSVの読み込み
            $generalIds = $this->leagueCsvService->readCsvToArray(storage_path('app/private/csv/generals/id-list.csv'));
            $directory = storage_path(config('app.scraping.output_file_path_general', 'app/private/general_details'));

            foreach ($generalIds as $generalId) {
                $filePath = $directory.DIRECTORY_SEPARATOR."{$generalId['id']}.html";
                // ファイルの存在確認
                if (! file_exists($filePath)) {
                    $this->error("ファイルが存在しません: {$filePath}");

                    return 1;
                }

                $html = file_get_contents($filePath);
                // ファイルのアクセス確認
                if (! $html) {
                    $this->error("ファイルにアクセスできません: {$filePath}");

                    return 1;
                }

                $this->info("読み込み成功: {$filePath}");

                $crawler = new Crawler($html);

                // 子クラスの処理を実行
                $this->processGeneral($crawler, $generalId);
            }

            // 後処理（CSV保存など）
            $this->afterProcessing();

        } catch (\Exception $e) {
            $this->error('エラーが発生しました: '.$e->getMessage());

            return 1;
        }

        return 0;
    }

    /**
     * 各武将ごとの処理を行う抽象メソッド
     *
     * @param  array  $generalId  ['id' => '...'] の形式
     */
    abstract protected function processGeneral(Crawler $crawler, array $generalId): void;

    /**
     * 全件処理後の後処理を行うフックメソッド
     */
    protected function afterProcessing(): void
    {
        // デフォルトでは何もしない
    }
}
