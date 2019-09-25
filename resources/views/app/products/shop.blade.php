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
                            @if($categories)
                                <div class="widget_categories">
                                    <ul>
                                        @foreach($categories as $category)
                                            <li><a href="#"><strong>{{$category->name}}</strong><span class="caet_count">(6)</span></a></li>
                                            @foreach($category->subCategories as $subCategory)
                                             <li style="margin-left: 15px"><a href="{{route('show.category', $subCategory->id)}}">{{$subCategory->name}}</a></li>
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-12 shop_details">
                    <div class="col-12">
                        @if (session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('errors')->first('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content">
                                <div class="tab-pane active show fade" id="grid_view" role="tabpanel">
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="single__product">
                                                <div class="produc_thumb">
                                                    <a href="#"><img src="{{$product->photos[0]->path}}" alt="" style="height: 220px;width: 288px"></a>
                                                </div>
                                                    <div class="product_action">
                                                        <div class="row">
                                                            <div class="ml-2 mr-1 mt-1">
                                                                {!! Form::open(['method'=>'POST','action' => 'ShoppingCartController@store']) !!}
                                                                {{ Form::hidden('product_id',$product->id)}}
                                                                {{Form::hidden('quantity', 1)}}
                                                                <button type="submit" title="Add To Cart" style="background-color: white;border-color: transparent"><i
                                                                        class="zmdi zmdi-shopping-cart-plus m-2"></i>
                                                                </button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                            <div class="ml-2 mr-1 mt-1">
                                                                {!! Form::open(['method'=>'POST','action' => 'WishListController@store']) !!}
                                                                {{ Form::hidden('product_id',$product->id) }}
                                                                <button type="submit" title="Wishlist" style="background-color: white;border-color: transparent"><i
                                                                        class="zmdi zmdi-favorite-outline m-2"></i>
                                                                </button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="product__desc ml-2">
                                                        <h3>
                                                            <a href="{{route('item', $product->id)}}">{{$product->name}}</a>
                                                        </h3>
                                                        <div class="price_amount">
                                                            <span class="current_price">RM{{$product->price}}</span>
                                                        </div>
                                                    </div>
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    @endforeach
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
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>4</li>
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
