<?php

namespace Tests\Unit\Infrastructure\Cashier;

use App\Enums\StripePricePlans;
use App\Infrastructure\Cashier\CashierManager;
use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Mockery;

test('initiateChargeBalance を呼び出すと、ユーザーの checkout メソッドが正しい引数で実行される', function () {
    // 1. 準備 (Arrange)
    $userId = 999;
    $quantity = 3;
    $plan = StripePricePlans::ONE_HUNDRED;

    // config を設定して Enum の getPriceId() が返す値を固定する
    $expectedPriceId = 'price_test_123';
    Config::set('app.stripe.price_id_one_hundred', $expectedPriceId);

    // 返り値となる Responsable モックを用意
    $responsableMock = Mockery::mock(Responsable::class);

    // User モデルをモックし、checkout メソッドが "1回だけ" 期待する引数で呼ばれることを定義する
    $userMock = Mockery::mock(User::class);
    $userMock->shouldReceive('checkout')
        ->once() // 1回呼ばれること（アサーション）
        ->with(
            [$expectedPriceId => $quantity], // 引数1: 商品と数量の配列
            [
                'success_url' => route('checkout.success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout.cancel'),
                'metadata' => [
                    'user_id' => $userId,
                    'stripe_price_id' => $expectedPriceId,
                ],
            ] // 引数2: Stripeのオプション引数
        )
        ->andReturn($responsableMock); // 戻り値を設定

    // Authファサードをモックして、上のユーザーモックや ID を返すようにする
    Auth::shouldReceive('user')->andReturn($userMock);
    Auth::shouldReceive('id')->andReturn($userId);

    // 2. 実行 (Act)
    $manager = new CashierManager;
    $result = $manager->initiateChargeBalance($quantity, $plan);

    // 3. 検証 (Assert)
    // - Userのモック側で shouldReceive()->once() が定義されているため、ここで既に「メソッドが叩かれたか」の検証が自動で行われます。
    // - 余分なチェックとして、返り値がそのまま返ってきているかを確認します。
    expect($result)->toBe($responsableMock);
});
