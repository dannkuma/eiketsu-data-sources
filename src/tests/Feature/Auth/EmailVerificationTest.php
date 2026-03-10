<?php

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('email verification screen can be rendered', function () {
    $user = User::factory()->unverified()->create();

    $response = $this->actingAs($user)->get('/verify-email');

    $response->assertStatus(200);
});

test('email can be verified', function () {
    // TODO: ログイン機能実装時にMustVerifyEmailの利用を検討する
    $this->markTestSkipped('MustVerifyEmailの利用を保留しているため、このテストはスキップします。');

    // TODO: Skip時の静的エラー回避のため以下コメントアウト
    // $user = User::factory()->unverified()->create();
    // Event::fake();
    // $verificationUrl = URL::temporarySignedRoute(
    //     'verification.verify',
    //     now()->addMinutes(60),
    //     ['id' => $user->id, 'hash' => sha1($user->email)]
    // );
    // $response = $this->actingAs($user)->get($verificationUrl);
    // Event::assertDispatched(Verified::class);
    // $this->assertTrue($user->fresh()->hasVerifiedEmail());
    // $response->assertRedirect(route('dashboard', absolute: false).'?verified=1');
});

test('email is not verified with invalid hash', function () {
    $user = User::factory()->unverified()->create();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1('wrong-email')]
    );

    $this->actingAs($user)->get($verificationUrl);

    expect($user->fresh()->hasVerifiedEmail())->toBeFalse();
});
