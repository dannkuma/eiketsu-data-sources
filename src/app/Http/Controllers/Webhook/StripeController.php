<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function handle(Request $request)
    {
        // Webhookの処理をここに実装
        \Log::info('Stripe Webhook Success!!');

        return response()->json(['status' => 'success']);
    }
}
