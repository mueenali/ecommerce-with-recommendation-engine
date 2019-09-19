<div class="header_middle">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="/assets/img/logo/logo-2.png" alt="exporso logo"></a>
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
                        <span class="cart_count">02</span>
                    </a>
                    <ul class="mini_cart_box">
                        <li class="single_product_cart">
                            <div class="cart_img">
                                <a href="product-details.html"><img src="/assets/img/product/pro_sm_1.png" alt=""></a>
                            </div>
                            <div class="cart_title">
                                <h5><a href="product-details.html"> Soffer Pro x33</a></h5>
                                <h6><a href="#">Black</a></h6>
                                <span>$95.00 x 1</span>
                            </div>
                            <div class="cart_delete">
                                <a href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </li>
                        <li class="single_product_cart">
                            <div class="cart_img">
                                <a href="product-details.html"><img src="/assets/img/product/pro_sm_2.png" alt=""></a>
                            </div>
                            <div class="cart_title">
                                <h5><a href="product-details.html"> Lotafaj una khdii</a></h5>
                                <h6><a href="#">Black</a></h6>
                                <span>$85.00 x 1</span>
                            </div>
                            <div class="cart_delete">
                                <a href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </li>

                        <li class="cart_space">
                            <div class="cart_sub">
                                <h4>Subtotal</h4>
                            </div>
                            <div class="cart_price">
                                <h4>$180.00</h4>
                            </div>
                        </li>
                        <li class="cart_btn_wrapper">
                            <a class="cart_btn" href={{ route('cart') }}>view cart</a>
                        <a class="cart_btn " href="{{ route('checkout') }}">checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
