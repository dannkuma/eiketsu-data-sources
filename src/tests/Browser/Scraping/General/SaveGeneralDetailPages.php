<?php

namespace Tests\Browser\Scraping\General;

use App\Services\LeagueCsvService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SaveGeneralDetailPages extends DuskTestCase
{
    protected LeagueCsvService $leagueCsvService;

    protected function setUp(): void
    {
        parent::setUp();
        set_time_limit(0); // 実行時間を無制限に設定
        $this->leagueCsvService = app(LeagueCsvService::class);
    }

    /**
     * 武将IDリストを読み込み、各武将の詳細ページからShadow DOMデータをHTMLとして保存する
     */
    public function test_create_generals_csv(): void
    {
        try {
            // 武将IDCSVの読み込み
            $generalIds = $this->leagueCsvService->readCsvToArray(Storage::disk('local')->path('csv/generals/id-list.csv'));

            // メモリ負荷対策: 50件ごとのチャンクに分割して処理
            foreach (array_chunk($generalIds, config('app.scraping.general_id_chunk_size', 50)) as $chunkIndex => $chunk) {
                Log::info(($chunkIndex + 1).'番目のチャンクを処理中');

                $this->browse(function (Browser $browser) use ($chunk) {
                    foreach ($chunk as $generalId) {
                        try {
                            $browser->visit("https://eiketsu-taisen.net/datalist/?v=general&s=general&c={$generalId['id']}");

                            // サイトへの負荷軽減とスクレイピング検知回避のため、設定時間待機
                            $browser->pause(config('app.scraping.visit_site_wait_time', 2500));

                            // Shadow DOM 内の <ul class="detail"> を取得
                            $shadowHtml = $browser->script("
                                const shadowHost = document.querySelector('ekt-main');
                                const general = shadowHost?.shadowRoot?.querySelector('.detail');
                                return general ? general.outerHTML : null;
                            ")[0];

                            if (! $shadowHtml) {
                                Log::warning("武将ID: {$generalId['id']} のShadow DOMデータが見つかりませんでした。");

                                continue;
                            }

                            $directory = storage_path(config('app.scraping.output_file_path_general', 'app/private/general_details'));
                            if (! file_exists($directory)) {
                                mkdir($directory, 0755, true);
                            }
                            $filename = "{$generalId['id']}.html";
                            $filePath = $directory.DIRECTORY_SEPARATOR.$filename;
                            file_put_contents($filePath, $shadowHtml);

                        } catch (\Exception $e) {
                            Log::error("武将ID {$generalId['id']} の処理中にエラーが発生しました: ".$e->getMessage());
                        }
                    }
                    // チャンクごとにCookieを削除してブラウザの状態をリフレッシュ
                    $browser->driver->manage()->deleteAllCookies();
                });

                // PHPのメモリ解放
                gc_collect_cycles();
            }

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }
}
