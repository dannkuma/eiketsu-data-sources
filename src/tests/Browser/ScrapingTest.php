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
        $this->browse(function (Browser $browser) {
            $browser->visit('https://eiketsu-taisen.net/datalist/?v=general&s=general&c=b2febe07b7a680b2426067ee6331f611')
                ->pause(5000); // ページの読み込み・動的処理待ちに必要に応じて調整

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
            $filename = 'general_detail_'.Carbon::now()->format('Ymd_His').'_'.uniqid().'.html';
            $filePath = $directory.DIRECTORY_SEPARATOR.$filename;
            file_put_contents($filePath, $crawler->html());
            echo $crawler->html();
        });
    }
}
