
@extends('layouts.app.appLayout')
@section('content')
    <!-- PAGE SECTION START -->
    <div class="cart_page_area pt-100 pb-60">
        <form method="post" action="{{route('cart.item.update')}}">
            @csrf
            @method('put')
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="col-12">
                        @if (session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('errors')->first('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="col-12">
                        @if ($errors->has('quantity'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first('quantity') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="col-12">
                        <div class="cart-table table-responsive mb-40">
                            <table>
                                <thead>
                                <tr>
                                    <th class="pro-remove">Remove</th>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart->cartItems as $item)
                                <tr>
                                    <td class="pro-remove"><a href="{{route('cart.item.remove', $item->id)}}">×</a></td>
                                    <td class="pro-thumbnail"><a href="#"><img src="assets/img/product/pro_sm_1.png" alt="" /></a></td>
                                    <td class="pro-title"><a href="#">{{$item->product->name}}</a></td>
                                    <td class="pro-price"><span class="amount">${{$item->product->price}}</span></td>
                                    <td class="pro-quantity"><div class="product-quantity">
                                            <input name="quantity" type="number" value="{{$item->quantity}}"/>
                                            <input type="hidden" name="item_id" value="{{$item->id}}"/>
                                            <input type="hidden" name="product_id" value="{{$item->product->id}}"/>
                                        </div>
                                    </td>
                                    <td class="pro-subtotal">${{$item->price}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="cart-buttons mb-30">
                            <input type="submit" value="Update Cart" />
                            <a href="{{route('shop.index')}}">Continue Shopping</a>
                        </div>
                        <div class="cart-coupon mb-40">
                            <h4>Coupon</h4>
                            <p>Enter your coupon code if you have one.</p>
                            <div class="coupon_form_inner">
                                <input type="text" placeholder="Coupon code" />
                                <input type="submit" value="Apply Coupon" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="cart-total mb-40">
                            <h3>Cart Totals</h3>
                            <div class="table-responsive">
                                <table>
                                    <tbody>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong><span class="amount">${{$cart->total}}</span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="proceed-to-checkout section mt-30">
                                <a href="{{route('checkout.index')}}">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- PAGE SECTION END -->

@endsection

