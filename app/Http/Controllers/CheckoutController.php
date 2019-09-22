<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{

    public function index() {
        return view('app.checkout');
    }

    public function payment() {
        return view('app.payment');
    }

    /**
     * Store a new charge.
     *
     * @param  Request  $request
     * @return Response
     */

    public function charge(Request $request) {
        $secretKey = \config('envVars.stripe_secret');
        Stripe::setApiKey($secretKey);
        $token = $request->input('stripeToken');
        $user = Helper::current_user();
        $charge = Charge::create([
            'amount' => $user->cart->total * 100,
            'currency' => 'usd',
            'source' => $token,
            'receipt_email' => $user->email,
        ]);
        return redirect('');
    }
}
