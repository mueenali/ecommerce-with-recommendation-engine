<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Repositories\CartItemRepository;
use App\Repositories\OrderItemRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    /** @var OrderRepository */
    private $orderRepository;
    /** @var OrderItemRepository */
    private $orderItemRepository;
    /** @var ProductRepository */
    private $productRepository;
    /** @var CartItemRepository */
    private $cartItemRepository;
    public function __construct(OrderRepository $orderRepo, OrderItemRepository $orderItemRepo, ProductRepository $productRepo, CartItemRepository $cartItemRepo)
    {
        $this->orderItemRepository = $orderItemRepo;
        $this->orderRepository = $orderRepo;
        $this->productRepository = $productRepo;
        $this->cartItemRepository = $cartItemRepo;
    }

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
       $order = $this->orderRepository->createOrder($user);
       $this->orderItemRepository->createOrderItem($user, $order);
       $this->productRepository->updateQuantity($user);
       foreach ($user->cart->cartItems as $cartItem) {
           $this->cartItemRepository->delete($cartItem->id);
       }
       $user->cart->total = 0;
       $user->cart->save();
       return redirect('')->withStatus(__('Order successfully Placed.'));
    }
}
