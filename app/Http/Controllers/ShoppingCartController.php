<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCartItemRequest;
use App\Http\Requests\UpdateCartItemRequest;
use App\Repositories\CartItemRepository;
use App\Repositories\CartRepository;


class ShoppingCartController extends Controller
{

    /** @var  CartRepository */
    private $cartRepository;
    /** @var CartItemRepository */
    private $cartItemRepository;
    public function __construct(CartRepository $cartRepo, CartItemRepository $cartItemRepo)
    {
        $this->cartRepository = $cartRepo;
        $this->cartItemRepository = $cartItemRepo;
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
            return redirect()->back()->withErrors(['error' => 'You cannot add more than 10 items per kind']);
        }else if ($result  == 'Not enough') {
            return redirect()->back()->withErrors(['error' => 'Quantity not enough']);
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
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartItemRequest $request)
    {
        $id = $request->input('item_id');
        $productId = $request->input('product_id');
        $result = $this->cartItemRepository->updateCartItem($id, $request->input('quantity'), $productId);
        if(!$result) {
            return redirect()->back()->withErrors(['error' => 'Quantity not enough.']);
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
