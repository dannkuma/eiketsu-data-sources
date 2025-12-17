<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // TODO: 本番では不要(ngrokリバースプロキシ用)
        $middleware->append(\App\Http\Middleware\TrustProxies::class);

        // webhookのCSRFトークン検証をスキップ
        $middleware->validateCsrfTokens(except: [
            'stripe/*',
            'webhook/stripe',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
