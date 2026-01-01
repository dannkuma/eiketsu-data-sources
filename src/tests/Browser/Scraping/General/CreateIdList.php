<?php

namespace Tests\Browser\Scraping\General;

use App\Services\LeagueCsvService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Csv\Exception as CsvException;
use Tests\DuskTestCase;

class CreateIdList extends DuskTestCase
{
    protected LeagueCsvService $leagueCsvService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->leagueCsvService = app(LeagueCsvService::class);
    }

    /**
     * A Dusk test example.
     */
    public function test_create_id_list(): void
    {
        // ヘッダーの定義
        $idListHeader = ['id'];

        try {
            // マスタの取得
            $response = Http::get('https://eiketsu-taisen.net/datalist/api/base');
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
            $writer = $this->leagueCsvService->createCsvWriter($path);
            // ヘッダーとデータの挿入
            $this->leagueCsvService->insertHeader($writer, $idListHeader);
            $this->leagueCsvService->insertAll($writer, $ids);

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
