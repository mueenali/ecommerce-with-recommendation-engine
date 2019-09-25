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
    @if(current_user())
        <!--Realted Product section start-->
            <div class="related_product_section mt-100">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Recommended for you</h2>
                        </div>
                    </div>
                </div>
                <div class="row related_product_guttters owl-carousel mt-60">
                    @foreach(getRecommendations() as $recommendation)
                        <div class="col-lg-3">
                            <div class="single__product">
                                <div class="produc_thumb">
                                    <a href="#"><img src="{{$recommendation->product->photos[0]->path}}" alt="" style="height: 220px;width: 288px"></a>
                                </div>
                                <div class="product_action">
                                    <div class="row">
                                        <div class="ml-2 mr-1 mt-1">
                                            {!! Form::open(['method'=>'POST','action' => 'ShoppingCartController@store']) !!}
                                            {{ Form::hidden('product_id',$recommendation->product->id)}}
                                            {{Form::hidden('quantity', 1)}}
                                            <button type="submit" title="Add To Cart" style="background-color: white;border-color: transparent"><i
                                                    class="zmdi zmdi-shopping-cart-plus m-2"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="ml-2 mr-1 mt-1">
                                            {!! Form::open(['method'=>'POST','action' => 'WishListController@store']) !!}
                                            {{ Form::hidden('product_id',$recommendation->product->id) }}
                                            <button type="submit" title="Wishlist" style="background-color: white;border-color: transparent"><i
                                                    class="zmdi zmdi-favorite-outline m-2"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>

                                </div>
                                <div class="product__desc ml-2">
                                    <h3>
                                        <a href="{{route('item', $recommendation->product->id)}}">{{$recommendation->product->name}}</a>
                                    </h3>
                                    <div class="price_amount">
                                        <span class="current_price">RM{{$recommendation->product->price}}</span>
                                    </div>
                                </div>
                                {{--</div>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
<!--Hot Deal product end-->




<!--Hot Deal product start-->
<div class="hot_details_product pb-110">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-3 col-md-3">
                <div class="section_title">
                    <h2>Most popular</h2>
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

@endsection
