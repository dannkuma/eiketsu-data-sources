<?php

namespace Tests\Browser\Scraping\Soul;

use App\Infrastructure\Csv\CsvManager;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SaveSoulDetailPages extends DuskTestCase
{
    protected CsvManager $csvManager;

    protected function setUp(): void
    {
        parent::setUp();
        set_time_limit(0); // 実行時間を無制限に設定
        $this->csvManager = app(CsvManager::class);
    }

    /**
     * 英魂IDリストを読み込み、各英魂の詳細ページからShadow DOMデータをHTMLとして保存する
     */
    public function test_create_souls_csv(): void
    {
        try {
            // 英魂IDCSVの読み込み
            $soulIds = $this->csvManager->readCsvToArray(Storage::disk('local')->path('csv/souls/id-list.csv'));

            $this->browse(function (Browser $browser) use ($soulIds) {
                foreach ($soulIds as $soulId) {
                    try {
                        $browser->visit("https://eiketsu-taisen.net/datalist/?v=soul&s=soul&c={$soulId['id']}");

                        // サイトへの負荷軽減とスクレイピング検知回避のため、設定時間待機
                        $browser->pause(config('app.scraping.visit_site_wait_time', 2500));

                        // Shadow DOM 内の <ul class="detail"> を取得
                        $shadowHtml = $browser->script("
                            const shadowHost = document.querySelector('ekt-main');
                            const soul = shadowHost?.shadowRoot?.querySelector('.detail');
                            return soul ? soul.outerHTML : null;
                        ")[0];

                        if (! $shadowHtml) {
                            $errorMessage = "英魂ID: {$soulId['id']} のShadow DOMデータが見つかりませんでした。";
                            Log::error($errorMessage);

                            throw new \Exception($errorMessage);
                        }

                        $directory = storage_path(config('app.scraping.output_file_path_souls', 'app/private/soul_details'));
                        if (! file_exists($directory)) {
                            mkdir($directory, 0755, true);
                        }
                        $filename = "{$soulId['id']}.html";
                        $filePath = $directory.DIRECTORY_SEPARATOR.$filename;
                        file_put_contents($filePath, $shadowHtml);

                    } catch (\Exception $e) {
                        Log::error("英魂ID {$soulId['id']} の処理中にエラーが発生しました: ".$e->getMessage());
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
