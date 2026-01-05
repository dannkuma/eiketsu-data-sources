<?php

namespace Tests\Browser\Scraping\Heirloom;

use App\Infrastructure\Csv\CsvManager;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SaveHeirloomDetailPages extends DuskTestCase
{
    protected CsvManager $csvManager;

    protected function setUp(): void
    {
        parent::setUp();
        set_time_limit(0); // 実行時間を無制限に設定
        $this->csvManager = app(CsvManager::class);
    }

    /**
     * 戦器IDリストを読み込み、各戦器の詳細ページからShadow DOMデータをHTMLとして保存する
     */
    public function test_create_heirlooms_csv(): void
    {
        try {
            // 戦器IDCSVの読み込み
            $heirloomIds = $this->csvManager->readCsvToArray(Storage::disk('local')->path('csv/heirlooms/id-list.csv'));

            $this->browse(function (Browser $browser) use ($heirloomIds) {
                foreach ($heirloomIds as $heirloomId) {
                    try {
                        $browser->visit("https://eiketsu-taisen.net/datalist/?v=equip&s=equip&c={$heirloomId['id']}");

                        // サイトへの負荷軽減とスクレイピング検知回避のため、設定時間待機
                        $browser->pause(config('app.scraping.visit_site_wait_time', 2500));

                        // Shadow DOM 内の <ul class="detail"> を取得
                        $shadowHtml = $browser->script("
                            const shadowHost = document.querySelector('ekt-main');
                            const heirloom = shadowHost?.shadowRoot?.querySelector('.detail');
                            return heirloom ? heirloom.outerHTML : null;
                        ")[0];

                        if (! $shadowHtml) {
                            $errorMessage = "戦器ID: {$heirloomId['id']} のShadow DOMデータが見つかりませんでした。";
                            Log::error($errorMessage);

                            throw new \Exception($errorMessage);
                        }

                        $directory = storage_path(config('app.scraping.output_file_path_heirloom', 'app/private/heirloom_details'));
                        if (! file_exists($directory)) {
                            mkdir($directory, 0755, true);
                        }
                        $filename = "{$heirloomId['id']}.html";
                        $filePath = $directory.DIRECTORY_SEPARATOR.$filename;
                        file_put_contents($filePath, $shadowHtml);

                    } catch (\Exception $e) {
                        Log::error("戦器ID {$heirloomId['id']} の処理中にエラーが発生しました: ".$e->getMessage());
                        throw $e;
                    }
                }
            });

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }
}
