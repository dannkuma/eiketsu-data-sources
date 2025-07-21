<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Symfony\Component\DomCrawler\Crawler;

class ScrapingTest extends DuskTestCase
{
    public function testExample(): void
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
            $filePath = storage_path('general_detail.html');  // 任意のパスを指定
            file_put_contents($filePath, $crawler->html());
            echo $crawler->html();
        });
    }
}
