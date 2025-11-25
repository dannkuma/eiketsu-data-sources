<?php

namespace Tests\Browser;

use Carbon\Carbon;
use Laravel\Dusk\Browser;
use Symfony\Component\DomCrawler\Crawler;
use Tests\DuskTestCase;

class ScrapingTest extends DuskTestCase
{
    public function test_example(): void
    {
        // $this->browse(function (Browser $browser) {
        //     $urls = [
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=b2febe07b7a680b2426067ee6331f611',
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=4d27103773c758a36e53523310ccf7bd',
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=11f8c08f5540e5d93173b6ca78204861',
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=b5535e467a179ba1de7c02a2fe84cc37',
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=802c6981301bb74d17bfd94231eb0bb5',
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=1e4cf5de953b36c699c6a9482d926120',
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=cf0598fae9522ee18378f36729694119',
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=a39d0a93f6b04a45cec27faf2413a850',
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=6e281cde50d2d7da4a62bde72a92301c',
        //         'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=c0483f0effbbeae3950fdfcaa41a857a',
        //     ];

        //     foreach ($urls as $url) {
        //         $start = microtime(true);

        //         $browser->visit($url); // ページロード完了まで待つ

        //         $end = microtime(true);
        //         $responseTime = $end - $start;

        //         echo "URL: {$url}\n";
        //         echo "レスポンスタイム: {$responseTime} 秒\n\n";
        //     }
        // });

        $this->browse(function (Browser $browser) {
        // $browser->visit('https://eiketsu-taisen.net/datalist/?v=general&s=general&c=b2febe07b7a680b2426067ee6331f611')
        //     ->pause(2000); // ページの読み込み・動的処理待ちに必要に応じて調整
        $browser->visit('https://eiketsu-taisen.net/datalist/?v=soul&s=soul&c=773667cffe350e93ebe46c9aad7d48c3')
            ->pause(2000); // ページの読み込み・動的処理待ちに必要に応じて調整

        // Shadow DOM 内の <ul class="detail"> を取得
        $shadowHtml = $browser->script("
            const shadowHost = document.querySelector('ekt-main');
            const generalList = shadowHost?.shadowRoot?.querySelector('.detail');
            return generalList ? generalList.outerHTML : 'Element not found';
        ")[0];
        $crawler = new Crawler($shadowHtml);
        $directory = storage_path(config('app.scraping.output_file_path', 'app/general_details'));
        if (! file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        $filename = 'soul_detail_'.Carbon::now()->format('Ymd_His').'_'.uniqid().'.html';
        $filePath = $directory.DIRECTORY_SEPARATOR.$filename;
        file_put_contents($filePath, $crawler->html());
        echo $crawler->html();
        });
    }
}
