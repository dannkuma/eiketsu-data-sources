<?php

namespace Tests\Feature\Services;

use App\Enums\Messages\Payments;
use App\Models\Order;
use App\Models\Price;
use App\Models\Product;
use App\Models\User;
use App\Services\OrderWebhookService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed();
});

test('すでに存在するorderのstripe_event_idが送られてきて、注文の登録が失敗し、ログは記録されるがレスポンスが200であるケース', function () {
    // 1. 準備 (Arrange)
    // Seederによって投入された最初のOrderを取得し、そのイベントIDを利用する
    $existingOrder = Order::firstOrFail();
    $eventId = $existingOrder->stripe_event_id;

    $payload = ['id' => $eventId];
    $request = Request::create('/api/webhook/stripe', 'POST', [], [], [], [], json_encode($payload));

    // ログ呼び出しの監視
    $expectedMessage = Payments::DUPLICATE_ORDER->getMessage();
    Log::shouldReceive('error')
        ->once()
        ->with(Payments::DUPLICATE_ORDER->value.': '.$expectedMessage." Stripe Event ID: {$eventId}");

    $service = new OrderWebhookService;

    // 2. 実行 (Act)
    $response = $service->handleOrderWebhook($request);

    // 3. 検証 (Assert)
    // エイリアスモックは使わず、実際にDBを参照して200が返るのを確認
    expect($response->getStatusCode())->toBe(200);
    expect($response->getData(true))->toMatchArray([
        'message' => $expectedMessage,
    ]);
});

test('webhookで送られてきたリクエストに含まれるstripe_price_idがDBに存在せず、ログが記録されたのちレスポンスが500であるケース', function () {
    // 1. 準備 (Arrange)
    $eventId = 'evt_new_123';
    $priceId = 'price_not_found_999';
    $payload = [
        'id' => $eventId,
        'data' => [
            'object' => [
                'metadata' => [
                    'stripe_price_id' => $priceId,
                ],
            ],
        ],
    ];

    $request = Request::create('/api/webhook/stripe', 'POST', [], [], [], [], json_encode($payload));

    // DB上にはこのstripe_price_idを持つPriceは作成しない (findPriceAndProductByStripePriceId は null になるはず)

    $expectedMessage = Payments::PRICE_NOT_FOUND->getMessage();
    Log::shouldReceive('error')
        ->once()
        ->with(Payments::PRICE_NOT_FOUND->value.': '.$expectedMessage." Stripe Price ID: {$priceId}");

    $service = new OrderWebhookService;

    // 2. 実行 (Act)
    $response = $service->handleOrderWebhook($request);

    // 3. 検証 (Assert)
    expect($response->getStatusCode())->toBe(500);
    expect($response->getData(true))->toMatchArray([
        'error' => $expectedMessage,
    ]);
});

test('DBのトランザクション内で、注文情報の登録が失敗し、ログが記録されたのちレスポンスが500であるケース', function () {
    // 1. 準備 (Arrange)
    $eventId = 'evt_valid_123';

    // Seederで投入された既存のUserとPriceを取得する
    $user = User::firstOrFail();
    $product = Product::firstOrFail();

    $payload = [
        'id' => $eventId,
        'data' => [
            'object' => [
                'metadata' => [
                    'stripe_price_id' => $product->price->stripe_price_id,
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                ],
            ],
        ],
    ];
    $request = Request::create('/api/webhook/stripe', 'POST', [], [], [], [], json_encode($payload));

    $expectedMessage = Payments::FAILED_TO_UPDATE_BALANCE->getMessage();
    // ログは2回(システムエラーのメッセージ用と、Exception内容用)呼ばれる
    Log::shouldReceive('error')->twice();

    // DB::transaction自体をmockして、例外を投げるようにする（これにより、トランザクション内の処理が一切実行されないため、注文の登録も大判の更新も行われない）
    DB::shouldReceive('transaction')->andThrow(new \Exception('Forced DB Error'));

    $service = new OrderWebhookService;

    // 2. 実行 (Act)
    $response = $service->handleOrderWebhook($request);

    // 3. 検証 (Assert)
    expect($response->getStatusCode())->toBe(500);
    expect($response->getData(true))->toMatchArray([
        'error' => $expectedMessage,
    ]);
});

test('正常系：新しいstripe_event_idが送られてきた場合、注文が登録され、ユーザーの大判(balance)が加算されるレスポンス200のケース', function () {
    // 1. 準備 (Arrange)
    $eventId = 'evt_success_123';

    // Seederで投入された既存のUserとProductを取得する
    $user = User::firstOrFail();
    $product = Product::firstOrFail();

    // DBに用意されているPriceのstripe_price_idを取得
    $stripePriceId = $product->price->stripe_price_id;

    // テスト前の残高を変数に代入して保持
    $initialBalance = $user->balance;

    $payload = [
        'id' => $eventId,
        'data' => [
            'object' => [
                'metadata' => [
                    'stripe_price_id' => $stripePriceId,
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                ],
            ],
        ],
    ];
    $request = Request::create('/api/webhook/stripe', 'POST', [], [], [], [], json_encode($payload));

    $service = new OrderWebhookService;

    // 2. 実行 (Act)
    $response = $service->handleOrderWebhook($request);

    // 3. 検証 (Assert)
    expect($response->getStatusCode())->toBe(200);

    // 注文がテーブルに登録されていることを確認
    $this->assertDatabaseHas('orders', [
        'stripe_event_id' => $eventId,
        'user_id' => $user->id,
        'product_id' => $product->id,
    ]);

    // balanceの増加を確認するためモデルを最新化
    $user->refresh();

    // Price::findPriceAndProductByStripePriceId()経由でPriceを取得して加算後の値を検証する
    $priceModel = Price::findPriceAndProductByStripePriceId($stripePriceId);
    $expectedBalance = $initialBalance + $priceModel->price;

    expect($user->balance)->toBe($expectedBalance);
});
