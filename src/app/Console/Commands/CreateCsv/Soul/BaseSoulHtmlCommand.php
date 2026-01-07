<?php

namespace App\Console\Commands\CreateCsv\Soul;

use App\Infrastructure\Csv\CsvManager;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

abstract class BaseSoulHtmlCommand extends Command
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
            // 英魂IDCSVの読み込み
            $soulIds = $this->csvManager->readCsvToArray(Storage::disk('local')->path('csv/souls/id-list.csv'));
            $directory = storage_path(config('app.scraping.output_file_path_souls', 'app/private/soul_details'));

            foreach ($soulIds as $soulId) {
                // パストラバーサル対策としてbasenameを使用
                $safeId = basename($soulId['id']);
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
                $this->processSoul($crawler, $soulId);
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
     * 各英魂ごとの処理を行う抽象メソッド
     *
     * @param  array{id: string}  $soulId  ['id' => '...'] の形式
     */
    abstract protected function processSoul(Crawler $crawler, array $soulId): void;

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

    /**
     * 英魂効果のテキストから英魂効果データを抽出するヘルパーメソッド
     *
     * @return array<int, string>|null [category, operator, value, unit] 形式の配列。マッチしない場合は null。
     */
    protected function extractEffectData(string $text): ?array
    {
        if (! preg_match('/^([^\+\-＋－\d]+)([＋\+\-－])([\d\.]+)(.*)$/u', $text, $matches)) {
            return null;
        }

        return [
            trim($matches[1]), // soul_effect_category (速度)
            $matches[2],       // soul_effect_operator (＋)
            $matches[3],       // soul_value (5)
            trim($matches[4]), // soul_effect_unit (％)
        ];
    }
}
