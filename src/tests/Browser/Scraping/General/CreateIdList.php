<?php

namespace Tests\Browser\Scraping\General;

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
     * 武将IDリストCSVを作成する
     */
    public function test_create_id_list(): void
    {
        // ヘッダーの定義
        $idListHeader = ['id'];

        try {
            // マスタの取得
            $response = Http::get(config('app.scraping.visit_site_base_url', 'https://eiketsu-taisen.net/datalist/api/base'));
            $json = $response->json();
            $generals = $json['general'] ?? [];

            if (empty($generals)) {
                throw new \Exception('武将データの取得に失敗しました。');
            }

            $ids = collect($generals)->map(function ($general) {
                // 武将を一意に識別するIDのみ抽出
                return [Str::before($general, ',')];
            })->toArray();

            // ディレクトリの自動作成
            if (! Storage::exists('csv/generals')) {
                Storage::makeDirectory('csv/generals');
            }

            $path = Storage::path('csv/generals/id-list.csv');

            // CSV Writerの生成
            $writer = $this->csvManager->createCsvWriter($path);
            // ヘッダーとデータの挿入
            $this->csvManager->insertHeader($writer, $idListHeader);
            $this->csvManager->insertAll($writer, $ids);

            Log::info("武将IDリストのCSV作成に成功しました: {$path}");
        } catch (CsvException $e) {
            Log::error('CSVの書き込みに失敗しました: '.$e->getMessage());
            throw $e;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }
}
