<?php

namespace App\Http\Controllers;

use App\Services\OrderWebhookService;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    protected $orderWebhookService;

    public function __construct(OrderWebhookService $orderWebhookService)
    {
        $this->orderWebhookService = $orderWebhookService;
    }

    public function handleOrderWebhook(Request $request)
    {
        return $this->orderWebhookService->handleOrderWebhook($request);
    }
}
