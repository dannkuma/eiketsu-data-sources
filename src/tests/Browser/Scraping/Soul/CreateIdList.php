<?php

namespace Tests\Browser\Scraping\Soul;

use App\Infrastructure\Csv\CsvManager;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Csv\Exception as CsvException;
use Tests\DuskTestCase;

class CreateIdList extends DuskTestCase
{
    protected CsvManager $csvManager;

    protected function setUp(): void
    {
        parent::setUp();
        $this->csvManager = app(CsvManager::class);
    }

    /**
     * 英魂IDリストCSVを作成する
     */
    public function test_create_id_list(): void
    {
        // ヘッダーの定義
        $idListHeader = ['id'];

        try {
            // マスタの取得
            $response = Http::get(config('app.scraping.visit_site_base_url', 'https://eiketsu-taisen.net/datalist/api/base'));
            $json = $response->json();
            $souls = $json['soul'] ?? [];

            if (empty($souls)) {
                throw new \Exception('英魂データの取得に失敗しました。');
            }

            $ids = collect($souls)->map(function ($soul) {
                // 英魂を一意に識別するIDのみ抽出
                return [Str::before($soul, ',')];
            })->toArray();

            // ディレクトリの自動作成
            if (! Storage::exists('csv/souls')) {
                Storage::makeDirectory('csv/souls');
            }

            $path = Storage::path('csv/souls/id-list.csv');

            // CSV Writerの生成
            $writer = $this->csvManager->createCsvWriter($path);
            // ヘッダーとデータの挿入
            $this->csvManager->insertHeader($writer, $idListHeader);
            $this->csvManager->insertAll($writer, $ids);

            Log::info("英魂IDリストのCSV作成に成功しました: {$path}");
        } catch (CsvException $e) {
            Log::error('CSVの書き込みに失敗しました: '.$e->getMessage());
            throw $e;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }
}
