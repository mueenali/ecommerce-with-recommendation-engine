<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\CreateCartItemRequest;
use App\Http\Requests\UpdateCartItemRequest;
use App\Repositories\CartItemRepository;
use App\Repositories\CartRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    /** @var  CartRepository */
    private $cartRepository;
    /** @var CartItemRepository */
    private $cartItemRepository;
    /** @var ProductRepository */
    private $productRepository;
    public function __construct(CartRepository $cartRepo, CartItemRepository $cartItemRepo,ProductRepository $productRepo )
    {
        $this->cartRepository = $cartRepo;
        $this->cartItemRepository = $cartItemRepo;
        $this->productRepository = $productRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = $this->cartRepository->hasCart();
        return view('app.cart')->with('cart', $cart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateCartItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCartItemRequest $request)
    {
        $cart = $this->cartRepository->hasCart();
        $result = $this->cartItemRepository->addCartItem($cart, $request->input('product_id'), $request->input('quantity'));
        if($result  == 'More than 10') {
            return redirect()->back()->withStatus(__('You cannot add more than 10 items per kind'));
        }else if ('Not enough') {
            return redirect()->back()->withStatus(__('Quantity not enoguh'));
        } else {
            return redirect()->back()->withStatus(__('Product successfully added to your cart.'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateCartItemRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartItemRequest $request, $id)
    {
        $result = $this->cartItemRepository->updateCartItem($id, $request->input('quantity'));
        if(!$result) {
            return redirect()->back()->withStatus(__('Quantity not enough.'));
        }
        return redirect()->back()->withStatus(__('Cart successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cartItemRepository->deleteCartItem($id);
        return redirect()->back()->withStatus(__('Product successfully removed from your cart.'));
    }
}
