<?php

namespace App\Console\Commands\CreateCsv\Heirloom;

use App\Infrastructure\Csv\CsvManager;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

abstract class BaseHeirloomHtmlCommand extends Command
{
    protected CsvManager $csvManager;

    public function __construct(CsvManager $csvManager)
    {
        parent::__construct();
        $this->csvManager = $csvManager;
    }

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        try {
            // 戦器IDCSVの読み込み
            $heirloomIds = $this->csvManager->readCsvToArray(Storage::disk('local')->path('csv/heirlooms/id-list.csv'));
            $directory = storage_path(config('app.scraping.output_file_path_heirloom', 'app/private/heirloom_details'));

            foreach ($heirloomIds as $heirloomId) {
                // パストラバーサル対策としてbasenameを使用
                $safeId = basename($heirloomId['id']);
                $filePath = $directory.DIRECTORY_SEPARATOR."{$safeId}.html";

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
                $this->processHeirloom($crawler, $heirloomId);
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
     * 各戦器ごとの処理を行う抽象メソッド
     *
     * @param  array{id: string}  $heirloomId  ['id' => '...'] の形式
     */
    abstract protected function processHeirloom(Crawler $crawler, array $heirloomId): void;

    /**
     * 全件処理後の後処理を行うフックメソッド
     */
    protected function afterProcessing(): void
    {
        // デフォルトでは何もしない
    }

    /**
     * 指定したセレクタの要素から不要なタグを除外してテキストを取得する
     */
    protected function extractTextWithoutTags(Crawler $crawler, string $selector, string|array $excludeTags): string
    {
        if ($crawler->filter($selector)->count() === 0) {
            return '';
        }

        // DOMを破壊しないようにクローンを作成して操作する
        $node = $crawler->filter($selector)->getNode(0)->cloneNode(true);
        // 子要素を走査して指定されたタグを削除
        $childNodes = iterator_to_array($node->childNodes);
        foreach ($childNodes as $child) {
            if (in_array($child->nodeName, (array) $excludeTags)) {
                $node->removeChild($child);
            }
        }

        return trim($node->textContent);
    }
}
