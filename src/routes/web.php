<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
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

Route::get('/checkout', function (Request $request) {
    $stripe_price_id = config('app.stripe.price_id');
    $quantity = 1;
    $user = User::find(1);

    return $user->checkout(
        [$stripe_price_id => $quantity],
        [
            'success_url' => route('checkout.success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout.cancel'),
            'metadata' => [
                'user_id' => $request->user()->id,
                'stripe_price_id' => $stripe_price_id,
            ],
        ]
    );
})->name('checkout');

Route::view('/checkout/success', 'stripe.checkout-success')->name('checkout.success');
Route::view('/checkout/cancel', 'stripe.checkout-cancel')->name('checkout.cancel');

require __DIR__.'/auth.php';
