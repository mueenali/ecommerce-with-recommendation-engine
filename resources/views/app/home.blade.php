@extends('layouts.app.appLayout')

@section('content')
<!--Banner area start-->
<div class="banner_area pt-50">
    <div class="banner_area_inner d-flex">
        <div class="col_4">
            <div class="single_banner">
                <a href="#"><img src="assets/img/banner/home2/1.jpg" alt=""></a>
            </div>
        </div>
        <div class="col_4">
            <div class="single_banner">
                <a href="#"><img src="assets/img/banner/home2/2.jpg" alt=""></a>
            </div>
        </div>
        <div class="col_4">
            <div class="single_banner">
                <a href="#"><img src="assets/img/banner/home2/3.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>
<!--Banner area end-->
<!--Hot Deal product start-->
<div class="hot_details_product pt-110 pb-105 ">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-3 col-md-3">
                <div class="section_title">
                    <h2>Best Product</h2>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="nav product_tab_menu justify-content-end" role="tablist">
                    <a class="active" href="#hot_all" data-toggle="tab" role="tab" aria-selected="true" aria-controls="best_all">All</a>
                    <a href="#best_bike" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_bike">Bike</a>
                    <a href="#best_tiar" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_tiar">Tiar</a>
                    <a href="#best_parts" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_parts">Parts</a>
                    <a href="#best_wheel" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_wheel">Wheel</a>
                    <a href="#best_light" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_light">Light</a>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-lg-9 col-12">
                <div class="tab-content">
                    <div class="tab-pane active show fade" id="best_all" role="tabpanel">
                        <div class="row carousel_product owl-carousel">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/1.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/2.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/3.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="best_bike" role="tabpanel">
                        <div class="row carousel_product owl-carousel">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/1.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/2.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/3.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="best_tiar" role="tabpanel">
                        <div class="row carousel_product owl-carousel">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/1.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/2.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/3.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="best_parts" role="tabpanel">
                        <div class="row carousel_product owl-carousel">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/1.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/2.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/3.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="best_wheel" role="tabpanel">
                        <div class="row carousel_product owl-carousel">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/1.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/2.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/3.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="best_light" role="tabpanel">
                        <div class="row carousel_product owl-carousel">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/1.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/2.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/3.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-12 ">
                <div class="single_banner long_hot_detals d-lg-none">
                    <a href="#"><img src="assets/img/banner/banner_tab_2.png" alt="Shop Banner"></a>
                </div>
                <div class="single_banner d-lg-block d-none">
                    <a href="#"><img src="assets/img/banner/5.jpg" alt="Shop Banner"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Hot Deal product end-->




<!--Hot Deal product start-->
<div class="hot_details_product pb-110">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-3 col-md-3">
                <div class="section_title">
                    <h2>Hot Deals</h2>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="nav product_tab_menu justify-content-end" role="tablist">
                    <a class="active" href="#hot_all" data-toggle="tab" role="tab" aria-selected="true" aria-controls="hot_all">All</a>
                    <a href="#hot_bike" data-toggle="tab" role="tab" aria-selected="false" aria-controls="hot_bike">Bike</a>
                    <a href="#hot_tiar" data-toggle="tab" role="tab" aria-selected="false" aria-controls="hot_tiar">Tiar</a>
                    <a href="#hot_parts" data-toggle="tab" role="tab" aria-selected="false" aria-controls="hot_parts">Parts</a>
                    <a href="#hot_wheel" data-toggle="tab" role="tab" aria-selected="false" aria-controls="hot_wheel">Wheel</a>
                    <a href="#hot_light" data-toggle="tab" role="tab" aria-selected="false" aria-controls="hot_light">Light</a>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-lg-9 col-md-12 col-12 ">
                <div class="tab-content">
                    <div class="tab-pane active show fade" id="hot_all" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/4.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/5.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/6.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/7.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/8.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/9.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hot_bike" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/4.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/5.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/6.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/7.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/8.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/9.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hot_tiar" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/4.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/5.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/6.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/7.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/8.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/9.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hot_parts" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/4.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/5.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/6.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/7.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/8.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/9.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hot_wheel" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/4.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/5.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/6.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/7.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/8.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/9.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hot_light" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/4.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/5.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/6.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/7.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/8.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single__product">
                                    <div class="produc_thumb">
                                        <a href="#"><img src="assets/img/product/home2/9.png" alt=""></a>
                                    </div>
                                    <div class="product_hover">
                                        <div class="product_action">
                                            <a href="#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        </div>
                                        <div class="product__desc">
                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                            <div class="price_amount">
                                                <span class="current_price">$2999.99</span>
                                                <span class="discount_price">-08%</span>
                                                <span class="old_price">$3700.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="single_banner long_hot_detals d-lg-none">
                    <a href="#"><img src="assets/img/banner/banner_tab_1.jpg" alt="Shop Banner"></a>
                </div>
                <div class="single_banner long_hot_detals d-none d-lg-block">
                    <a href="#"><img src="assets/img/banner/4.jpg" alt="Shop Banner"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Hot Deal product end-->




<!--Banner product section-->
<div class="banner_product_section home2 pb-110">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-8 col0-12">
                <div class="single_banner pd_right">
                    <a href="#"><img src="assets/img/banner/home2/4.jpg" alt="Shop Banner"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single__product_sm mb-30">
                            <div class="produc_thumb">
                                <a href="#"><img src="assets/img/product/home2/prod_sm_1.png" alt=""></a>
                            </div>
                            <div class="product__desc">
                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                <div class="product_ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price_amount">
                                    <span class="current_price">$2999.99</span>
                                    <span class="discount_price">-08%</span>
                                    <span class="old_price">$3700.00</span>
                                </div>
                            </div>

                        </div>
                        <div class="single__product_sm mb-30">
                            <div class="produc_thumb">
                                <a href="#"><img src="assets/img/product/home2/prod_sm_2.png" alt=""></a>
                            </div>
                            <div class="product__desc">
                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                <div class="product_ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price_amount">
                                    <span class="current_price">$2999.99</span>
                                    <span class="discount_price">-08%</span>
                                    <span class="old_price">$3700.00</span>
                                </div>
                            </div>

                        </div>
                        <div class="single__product_sm">
                            <div class="produc_thumb">
                                <a href="#"><img src="assets/img/product/home2/prod_sm_3.png" alt=""></a>
                            </div>
                            <div class="product__desc">
                                <h3><a href="#">Lotafaj una khdii</a></h3>
                                <div class="product_ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price_amount">
                                    <span class="current_price">$2999.99</span>
                                    <span class="discount_price">-08%</span>
                                    <span class="old_price">$3700.00</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single__product_sm mb-30">
                            <div class="produc_thumb">
                                <a href="#"><img src="assets/img/product/home2/prod_sm_4.png" alt=""></a>
                            </div>
                            <div class="product__desc">
                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                <div class="product_ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price_amount">
                                    <span class="current_price">$2999.99</span>
                                    <span class="discount_price">-08%</span>
                                    <span class="old_price">$3700.00</span>
                                </div>
                            </div>

                        </div>
                        <div class="single__product_sm mb-30">
                            <div class="produc_thumb">
                                <a href="#"><img src="assets/img/product/home2/prod_sm_5.png" alt=""></a>
                            </div>
                            <div class="product__desc">
                                <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                <div class="product_ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price_amount">
                                    <span class="current_price">$2999.99</span>
                                    <span class="discount_price">-08%</span>
                                    <span class="old_price">$3700.00</span>
                                </div>
                            </div>

                        </div>
                        <div class="single__product_sm">
                            <div class="produc_thumb">
                                <a href="#"><img src="assets/img/product/home2/prod_sm_6.png" alt=""></a>
                            </div>
                            <div class="product__desc">
                                <h3><a href="#">Lotafaj una khdii</a></h3>
                                <div class="product_ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price_amount">
                                    <span class="current_price">$2999.99</span>
                                    <span class="discount_price">-08%</span>
                                    <span class="old_price">$3700.00</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner product section end-->
@endsection
