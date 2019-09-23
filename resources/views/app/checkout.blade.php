@extends('layouts.app.appLayout')
@section('content')
    <!-- checkout-area start -->
    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">

                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                @foreach(\App\Helpers\Helper::current_user()->cart->cartItems as $item)
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                       {{$item->product->name}} <strong class="product-quantity"> × {{$item->quantity}}</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">{{$item->price}}</span>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                                <tfoot>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">{{\App\Helpers\Helper::current_user()->cart->total}}</span></strong>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="panel-group" id="faq">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Credit Card</a></h5>
                                        </div>
                                        <div id="payment-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <a class="btn btn-success" href="{{route('payment.index')}}" role="button">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->
@endsection
