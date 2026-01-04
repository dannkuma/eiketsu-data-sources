<?php

namespace App\Http\Controllers;

use App\Infrastructure\Scraping\BrowserShotManager;
use Illuminate\Http\Request;

class BrowsershotController extends Controller
{
    protected $browserShotManager;

    public function __construct(BrowserShotManager $browserShotManager)
    {
        $this->browserShotManager = $browserShotManager;
    }

    public function showDeckImage(Request $request)
    {
        // 武将画像を出力
        $this->browserShotManager->captureScreenshot(
            'https://eiketsu-taisen.net/datalist/?v=general&s=general&c=b2febe07b7a680b2426067ee6331f611',
            public_path('images/deck.png')
        );

        // 武将画像を表示
        return response()->file(public_path('images/deck.png'));
    }
}
