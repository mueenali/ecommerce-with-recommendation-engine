@extends('layouts.app.appLayout')

@section('content')
    <!-- PAGE SECTION START -->
    <div class="page-section section ptb-100">
        <form action="#">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wishlist-table table-responsive">
                            @if($wishLists)
                            <table>
                                <thead>
                                <tr>
                                    <th class="pro-remove">Remove</th>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Unit Price</th>
                                    <th class="pro-stock-stauts">Stock Stauts</th>
                                    <th class="pro-add-to-cart">Add to Cart</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($wishLists as $key => $value)
                                <tr>
                                    <td class="pro-remove"><a href="{{ route('wishList.item.remove', $value->id) }}">X</a></td>
                                    <td class="pro-thumbnail"><a href="#"><img src="assets/img/product/pro_sm_1.png" alt="" /></a></td>
                                    <td class="pro-title"><a href="#">{{$value->product->name}}</a></td>
                                    <td class="pro-price"><span class="amount">${{$value->product->price}}</span></td>
                                    @if($value->product->quantity > 0)
                                        <td class="pro-stock-stauts"><span class="in-stock">In Stock</span></td>
                                    @else
                                        <td class="pro-stock-stauts"><span class="out-stock">Out Of Stock</span></td>
                                    @endif
                                    <td class="pro-add-to-cart"><a href="#" class="add-to-cart">add to cart</a></td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- PAGE SECTION END -->
@endsection

