
@extends('layouts.app.appLayout')
@section('content')
    <!-- PAGE SECTION START -->
    <div class="cart_page_area pt-100 pb-60">
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
                                {{ session('errors') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    @if ($errors->has('quantity'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{ $errors->first('quantity') }}</li>
                            </ul>
                        </div>
                    @endif
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
                                    <td class="pro-remove"> <form action="{{ route('cart.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="button" onclick="confirm('{{ __("Are you sure you want to delete this product?") }}') ? this.parentElement.submit() : ''">
                                                {{ __('×') }}
                                            </button>
                                        </form>
                                    </td>
                                    <td class="pro-thumbnail"><a href="#"><img src="assets/img/product/pro_sm_1.png" alt="" /></a></td>
                                    <td class="pro-title"><a href="#">{{$item->product->name}}</a></td>
                                    <td class="pro-price"><span class="amount">${{$item->product->price}}</span></td>
                                    <td class="pro-quantity"><div class="product-quantity"><input name="quantity" type="number" value="{{$item->quantity}}" /></div></td>
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
                                <a href="#">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- PAGE SECTION END -->


@endsection

