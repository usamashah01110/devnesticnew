<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function payment(){
        return view('pages.stripePayment');
    }

    public function createPaymentIntent(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:50',
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Create a payment intent
            $paymentIntent = PaymentIntent::create([
                'amount' => $validatedData['amount'] * 100, // Convert to cents
                'currency' => 'usd',
                'description' => 'Donation from ' . $validatedData['name'],
                'automatic_payment_methods' => ['enabled' => true],
                'metadata' => [
                    'donor_name' => $validatedData['name'],
                    'donor_email' => $validatedData['email'],
                ],
            ]);

            $data = [
                'clientSecret' => $paymentIntent->client_secret,
                'type' => 'payment_intent',
                'amount' => $validatedData['amount'],
                'donor_name' => $validatedData['name'],
                'donor_email' => $validatedData['email'],
            ];

            return view('pages.checkout', $data);

        } catch (\Exception $e) {
            return back()->withErrors(['stripe_error' => $e->getMessage()]);
        }
    }
}
