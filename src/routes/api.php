<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webhook\StripeController;
use Laravel\Cashier\Http\Middleware\VerifyWebhookSignature;

Route::post('/webhook/stripe', [StripeController::class, 'handle'])
    ->middleware(VerifyWebhookSignature::class)
    ->name('webhook.stripe');