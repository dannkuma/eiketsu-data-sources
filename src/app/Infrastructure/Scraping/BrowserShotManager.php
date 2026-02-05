<?php

namespace App\Infrastructure\Scraping;

use Spatie\Browsershot\Browsershot;

class BrowserShotManager
{
    /**
     * 指定したURLのスクリーンショットを撮影し、指定したパスに保存する
     */
    public function captureScreenshot(string $url, string $outputPath): void
    {
        // png画像として保存
        Browsershot::url($url)
            ->setRemoteInstance('172.22.0.100', 9222)
            ->noSandbox()
            ->waitUntilNetworkIdle()
            ->save($outputPath);
    }
}
