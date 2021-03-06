@extends('layouts.app.appLayout')

@section('content')
                @if($product)
                <!--product Details Inner-->
                <div class="product_details_inner left_sidebar ptb-110">
                    <div class="container">
                        <div class="row">
                            <!--Product Tab Style start-->
                            <div class="col-md-12 col-lg-5 col-12">
                                <div class="product-details-img-content">
                                    <div class="product-details-tab">
                                        <div id="img-1" class="zoomWrapper single-zoom">
                                            <a href="#">
                                                <img id="zoom1" src="{{$product->photos[0]->path}}" data-zoom-image="{{$product->photos[0]->path}}" alt="big-1">
                                            </a>
                                        </div>
                                        <div class="single-zoom-thumb mt-20">
                                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                                @foreach($product->photos as $photo)
                                                <li>
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{$photo->path}}" data-zoom-image="{{$photo->path}}">
                                                        <img src="{{$photo->path}}" style="height: 85px;width: 110px" alt="zo-th-1"/>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product Tab Style End-->
                            <div class="col-md-12 col-lg-7 col-12">
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
                                @if ($errors->has('quantity'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>{{ $errors->first('quantity') }}</li>
                                        </ul>
                                    </div>
                                @endif
                                    <div class="product-details-content">
                                        <h3>{{$product->name}}</h3>
                                        <div class="rating-number">
                                            <div class="product_rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            </div>
                                            <div class="review_count">
                                                <span>2 Ratting (S)</span>
                                            </div>
                                        </div>
                                        <div class="price_amount">
                                            <span class="current_price">RM {{$product->price}}</span>
                                        </div>
                                        {!! Form::open(['method'=>'POST','action' => 'ShoppingCartController@store']) !!}
                                        <div class="single_product_action d-flex align-items-center">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="01" name="quantity" class="cart-plus-minus-box">
                                            </div>
                                            <div style="margin-left: 20px" class="add_to_cart_btn">
                                                {{ Form::hidden('product_id',$product->id)}}
                                                <button type="submit" class="btn btn-outline-secondary">Add To Cart</button>
                                            </div>
                                            {!! Form::close() !!}
                                            <div style="margin-left: 20px" class="wishlist">
                                                <button type="button" class="btn btn-outline-secondary">Add To Wishlist</button>
                                            </div>
                                        </div>
                                        <div class="product_details_cat_list mt-35">
                                            <div class="categories_label">
                                                <span>Categories:</span>
                                            </div>
                                            <ul>
                                                <li><a href="#">{{$product->subCategory->category->name}}</a></li>
                                                <li><a href="#">{{$product->subCategory->name}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="product_details_tag_list mtb-10">
                                            <div class="tag_label">
                                                <span>Brand : </span>
                                            </div>
                                            <ul>
                                                <li><a href="#">{{$product->brand}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="product_details_tag_list mtb-10">
                                            <div class="tag_label">
                                                <span>Availability : </span>
                                            </div>
                                            <ul>
                                                @if($product->quantity >0)
                                                    <li><a href="">In Stock</a></li>
                                                @else
                                                    <li><a href="">Out Of Stock</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="product-share">
                                            <div class="share_label">
                                                <span>Share :</span>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Product Thumbnail Description Start -->
                        <div class="product_desc_tab_container mt-100 ">

                            <div class="thumb-desc-inner">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="product_desc_tab nav" role="tablist">
                                            <li><a class="active" data-toggle="tab" href="#dtail">Description</a></li>
                                            <li><a data-toggle="tab" href="#review">Reviews</a></li>
                                        </ul>
                                        <!-- Product Thumbnail Tab Content Start -->
                                        <div class="tab-content thumb-content mt-30">
                                            <divs id="dtail" class="tab-pane fade show active">
                                                <p>{{$product->description}}</p>
                                            </divs>
                                            <div id="review" class="tab-pane fade">
                                                <!-- Reviews Start -->
                                                <div class="review">
                                                    <div class="group-title">
                                                        <h2>customer review</h2>
                                                    </div>
                                                </div>
                                                <!-- Reviews End -->
                                                <!-- Reviews Start -->
                                                <div class="review mt-20">
                                                    <h2 class="review-title mb-15">You're reviewing: <br><span>Faded Short Sleeves T-shirt</span></h2>
                                                    <p class="review-mini-title">your rating</p>
                                                    <ul class="review-list">
                                                        <!-- Single Review List Start -->
                                                        <li>
                                                            <span>Quality</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <!-- Single Review List End -->
                                                        <!-- Single Review List Start -->
                                                        <li>
                                                            <span>price</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <!-- Single Review List End -->
                                                        <!-- Single Review List Start -->
                                                        <li>
                                                            <span>value</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                        <!-- Single Review List End -->
                                                    </ul>
                                                    <!-- Reviews Field Start -->

                                                    <!-- Reviews Field Start -->
                                                </div>
                                                <!-- Reviews End -->
                                            </div>
                                        </div>
                                        <!-- Product Thumbnail Tab Content End -->
                                    </div>
                                </div>
                                <!-- Row End -->
                            </div>
                        </div>
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
                        <!--Realted Product section end-->
                    </div>
                </div>
                @endif
                <!--product Details End-->
@endsection







