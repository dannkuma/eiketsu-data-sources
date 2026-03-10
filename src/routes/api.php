<?php

use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;
use Laravel\Cashier\Http\Middleware\VerifyWebhookSignature;

Route::post('/webhook/stripe', [WebhookController::class, 'handleOrderWebhook'])
    ->middleware(VerifyWebhookSignature::class) // StripeのWebhook署名を検証するミドルウェアを適用
    ->name('webhook.stripe');
