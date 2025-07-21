<?php

namespace App\Services;

use Laravel\Cashier\Cashier;
use Illuminate\Http\Request;
use Laravel\Cashier\Billable;
use App\Models\Order;

class PaymentService
{
    public function checkout(Billable $user, string $stripe_price_id, string $quantity)
    {
        $stripe_price_id = 'price_1RB33K08c06ZX1f2TPNtMQmC';
        $quantity = 1;

        return $user->checkout(
            [$stripe_price_id => $quantity],
            [
                'success_url' => route('checkout.success'). '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout.cancel'),
                'metadata' => [
                    'user_id' => $user->id,
                ],
            ]
        );

    }

    public function registrationOrder(Request $request)
    {
        $session_id = $request->get('session_id');
        $stripe_session = Cashier::stripe()->checkout->sessions->retrieve($session_id);
        $user_id = $stripe_session['metadata']['user_id'] ?? null;
        if (!$user_id)
        {
            return redirect()->route('stripe.checkout-cancel');
        }
        Order::create([
            'user_id' => $user_id,
        ]);

        return view('stripe.checkout-success');
    }
}