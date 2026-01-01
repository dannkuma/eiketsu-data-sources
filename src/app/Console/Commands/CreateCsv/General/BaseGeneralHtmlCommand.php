<?php

namespace App\Console\Commands\CreateCsv\General;

use App\Services\LeagueCsvService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

abstract class BaseGeneralHtmlCommand extends Command
{
    protected LeagueCsvService $leagueCsvService;

    public function __construct(LeagueCsvService $leagueCsvService)
    {
        parent::__construct();
        $this->leagueCsvService = $leagueCsvService;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            // 武将IDCSVの読み込み
            $generalIds = $this->leagueCsvService->readCsvToArray(Storage::disk('local')->path('csv/generals/id-list.csv'));
            $directory = storage_path(config('app.scraping.output_file_path_general', 'app/private/general_details'));

            foreach ($generalIds as $generalId) {
                $filePath = $directory.DIRECTORY_SEPARATOR."{$generalId['id']}.html";
                // ファイルの存在確認
                if (! file_exists($filePath)) {
                    throw new \Exception("ファイルが存在しません: {$filePath}");
                }

                $html = file_get_contents($filePath);
                // ファイルのアクセス確認
                if (! $html) {
                    throw new \Exception("ファイルにアクセスできません: {$filePath}");
                }

                $this->info("読み込み成功: {$filePath}");

                $crawler = new Crawler($html);

                // 子クラスの処理を実行
                $this->processGeneral($crawler, $generalId);
            }

            // 後処理（CSV保存など）
            $this->afterProcessing();

            return 0;

        } catch (\Exception $e) {
            $this->error('エラーが発生しました: '.$e->getMessage());

            return 1;
        }
    }

    /**
     * 各武将ごとの処理を行う抽象メソッド
     *
     * @param  array{id: string}  $generalId  ['id' => '...'] の形式
     */
    abstract protected function processGeneral(Crawler $crawler, array $generalId): void;

    /**
     * 全件処理後の後処理を行うフックメソッド
     */
    protected function afterProcessing(): void
    {
        // デフォルトでは何もしない
    }

    /**
     * 指定したセレクタの要素からrtタグ（ルビ）を除外してテキストを取得する
     */
    protected function extractTextWithoutRuby(Crawler $crawler, string $selector): string
    {
        if ($crawler->filter($selector)->count() === 0) {
            return '';
        }

        $node = $crawler->filter($selector)->getNode(0);
        // 子要素を走査してrtタグを削除
        $childNodes = iterator_to_array($node->childNodes);
        foreach ($childNodes as $child) {
            if ($child->nodeName === 'rt') {
                $node->removeChild($child);
            }
        }

        return trim($node->textContent);
    }
}
