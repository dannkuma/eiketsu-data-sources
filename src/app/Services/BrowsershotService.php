<?php

namespace App\Services;

use Spatie\Browsershot\Browsershot;

class BrowsershotService
{
    /**
     * Capture a screenshot of the given URL.
     *
     * @param string $url
     * @param string $outputPath
     * @return void
     */
    public function captureScreenshot(string $url, string $outputPath): void
    {
        // png画像を
        Browsershot::url($url)
            ->setRemoteInstance('172.22.0.100', '9222')
            ->noSandbox()
            ->waitUntilNetworkIdle()
            ->save($outputPath);
    }
}