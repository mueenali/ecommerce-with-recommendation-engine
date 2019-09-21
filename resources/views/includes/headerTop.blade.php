<div class="header_middle">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3">
                <div class="logo">
                    <a href="index.html"><img src="/assets/img/logo/logo-2.png" alt="exporso logo"></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="category_search">
                    <form action="#">
                        <div class="category_search_inner">
                            <div class="select">
                                <select name="categroy_search">
                                    <option value="1" selected>All Categories</option>
                                    <option value="2" >Latest Bikes</option>
                                    <option value="3" >Upcoming Bike</option>
                                    <option value="4" >popular Bike</option>
                                    <option value="5" >Best Selling Bike</option>
                                </select>
                            </div>
                            <div class="search">
                                <input type="text" placeholder="Search Keyword Here">
                            </div>
                            <div class="submit">
                                <button type="submit"><i class="zmdi zmdi-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-1">
                <div class="mini_cart_box_wrapper text-right">
                    <a href="#">
                        <img src="/assets/img/icon/cart-2.png" alt="Mini Cart Icon">
                        <span class="cart_count">{{\App\Helpers\Helper::getCartItemsCount()}}</span>
                    </a>
                    <ul class="mini_cart_box">
                        @foreach(\App\Helpers\Helper::current_user()->cart->cartItems as $item)
                        <li class="single_product_cart">
                            <div class="cart_img">
                                <a href="#"><img src="/assets/img/product/pro_sm_1.png" alt=""></a>
                            </div>
                            <div class="cart_title">
                                <h5><a href="product-details.html">{{$item->product->name}}</a></h5>
                                <span>${{$item->price}} x {{$item->quantity}}</span>
                            </div>
                            <div class="cart_delete">
                                <a href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </li>
                        @endforeach
                        <li class="cart_space">
                            <div class="cart_sub">
                                <h4>Total</h4>
                            </div>
                            <div class="cart_price">
                                <h4>{{\App\Helpers\Helper::current_user()->cart->total}}</h4>
                            </div>
                        </li>
                        <li class="cart_btn_wrapper">
                            <a class="cart_btn" href="{{route('cart.index')}}">view cart</a>
                            <a class="cart_btn " href="checkout.html">checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
