<?php

namespace Tests\Browser\Scraping\Heirloom;

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
     * 戦器IDリストCSVを作成する
     */
    public function test_create_id_list(): void
    {
        // ヘッダーの定義
        $idListHeader = ['id'];

        try {
            // マスタの取得
            $response = Http::get(config('app.scraping.visit_site_base_url', 'https://eiketsu-taisen.net/datalist/api/base'));
            $json = $response->json();
            $heirlooms = $json['equip'] ?? [];

            if (empty($heirlooms)) {
                throw new \Exception('戦器データの取得に失敗しました。');
            }

            $ids = collect($heirlooms)->map(function ($heirloom) {
                // 戦器を一意に識別するIDのみ抽出
                return [Str::before($heirloom, ',')];
            })->toArray();

            // ディレクトリの自動作成
            if (! Storage::exists('csv/heirlooms')) {
                Storage::makeDirectory('csv/heirlooms');
            }

            $path = Storage::path('csv/heirlooms/id-list.csv');

            // CSV Writerの生成
            $writer = $this->leagueCsvService->createCsvWriter($path);
            // ヘッダーとデータの挿入
            $this->leagueCsvService->insertHeader($writer, $idListHeader);
            $this->leagueCsvService->insertAll($writer, $ids);

            Log::info("戦器IDリストのCSV作成に成功しました: {$path}");
        } catch (CsvException $e) {
            Log::error('CSVの書き込みに失敗しました: '.$e->getMessage());
            throw $e;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }
}
