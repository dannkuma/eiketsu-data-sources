<?php

use App\Enums\StripePricePlans;
use App\Http\Controllers\ProfileController;
use App\Infrastructure\Cashier\CashierManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware('auth')->group(function () {
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// TODO: Stripe動作確認用のルート（本番環境では削除予定）
Route::get('/checkout', function (Request $request) {
    return (new CashierManager)->initiateChargeBalance(1, StripePricePlans::ONE_HUNDRED);
})->name('checkout');

// TODO: Stripe動作確認用のルート（本番環境では削除予定）
Route::view('/checkout/success', 'stripe.checkout-success')->name('checkout.success');
Route::view('/checkout/cancel', 'stripe.checkout-cancel')->name('checkout.cancel');

// TODO: モーダルの動作確認用ルート（本番環境では削除予定）
Route::view('/modal', 'modal')->name('modal');

require __DIR__.'/auth.php';
