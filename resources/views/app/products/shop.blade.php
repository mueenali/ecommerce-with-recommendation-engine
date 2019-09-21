@extends('layouts.app.appLayout')

@section('content')
   <!--shop area start-->
                <div class="shop_area ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-8 col-12">
                                <div class="shop_sidebar">

                                    <div class="sidebar_widget mb-50">
                                        <div class="widget_title">
                                            <h3>Categories</h3>
                                        </div>
                                        <div class="widget_categories">
                                           <ul>
                                               @if($categories)
                                                   @foreach($categories as $category)
                                                <li><a href="#">{{$category->name}}<span class="caet_count">(6)</span></a></li>
                                                   @endforeach
                                                   @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12 col-12 shop_details">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Shop Top Bar Start -->
                                        <div class="shop-top-bar d-flex justify-content-between align-items-center">

                                            <div class="shop_top_left d-flex align-items-center">
                                                <!-- Product View Mode -->
                                                <div class="product-view-mode nav" role="tablist" >
                                                    <a class="active" href="#grid_view" data-toggle="tab" role="tab" aria-controls="grid_view"><i class="fa fa-th"></i></a>
                                                    <a href="#list_view" data-toggle="tab" role="tab" aria-controls="list_view"><i class="fa fa-list"></i></a>
                                                </div>

                                                <!-- Product Showing -->
                                                <div class="product-showing d-flex">
                                                    <p>Showing</p>
                                                    <select name="showing" class="nice-select">
                                                        <option value="1">8</option>
                                                        <option selected value="2">12</option>
                                                        <option value="3">16</option>
                                                        <option value="4">20</option>
                                                        <option value="5">24</option>
                                                    </select>
                                                </div>

                                                <!-- Product Short -->
                                                <div class="product-short d-flex">
                                                    <p>Short by</p>
                                                    <select name="sortby" class="nice-select">
                                                        <option value="trending">Trending items</option>
                                                        <option value="sales">Best sellers</option>
                                                        <option value="rating">Best rated</option>
                                                        <option value="date">Newest items</option>
                                                        <option value="price-asc">Price: low to high</option>
                                                        <option value="price-desc">Price: high to low</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <!-- Product Pages -->
                                            <div class="product-pages">
                                                <p>Pages 1 of 25</p>
                                            </div>

                                        </div><!-- Shop Top Bar End -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-content">
                                            <div class="tab-pane active show fade" id="grid_view" role="tabpanel">
                                                <div class="row">
                                                    @if($products)
                                                        @foreach($products as $product)
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="single__product">
                                                            <span class="pro_badge">Sale</span>
                                                            <div class="produc_thumb">
                                                                <a href="{{route('item',$product->id)}}"><img src="assets/img/product/home2/4.png" alt=""></a>
                                                            </div>
                                                            <div class="product_hover">
                                                                <div class="product_action">
                                                                    <div>
                                                                        {!! Form::open(['method'=>'POST','action' => 'ShoppingCartController@store']) !!}
                                                                        {{ Form::hidden('product_id',$product->id)}}
                                                                         {{Form::hidden('quantity', 1)}}
                                                                        <button type="submit" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
                                                                        {!! Form::close() !!}
                                                                    </div>
                                                                    <div>
                                                                        {!! Form::open(['method'=>'POST','action' => 'WishListController@store']) !!}
                                                                        {{ Form::hidden('product_id',$product->id) }}
                                                                        <button type="submit" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></button>
                                                                        {!! Form::close() !!}
                                                                    </div>
                                                                </div>
                                                                <div class="product__desc">
                                                                    <h3><a href="{{route('item', $product->id)}}">{{$product->name}}</a></h3>
                                                                    <div class="price_amount">
                                                                        <span class="current_price">${{$product->price}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pagination_box mt-70">
                                    <div class="col-12">
                                        <div class="pagination">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-chevron-left"></i> prev</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li class="active">4</li>
                                                <li>..</li>
                                                <li><a href="#">8</a></li>
                                                <li><a href="#">9</a></li>
                                                <li><a href="#">next<i class="zmdi zmdi-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--shop area end-->
@endsection
