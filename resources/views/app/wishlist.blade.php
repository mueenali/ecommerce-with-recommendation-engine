@extends('layouts.app.appLayout')

@section('content')
    <!-- PAGE SECTION START -->
    <div class="page-section section ptb-100">
        <form action="#">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wishlist-table table-responsive">
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
                                <tr>
                                    <td class="pro-remove"><a href="#">×</a></td>
                                    <td class="pro-thumbnail"><a href="#"><img src="assets/img/product/pro_sm_1.png" alt="" /></a></td>
                                    <td class="pro-title"><a href="#">Le Parc Minotti Chair</a></td>
                                    <td class="pro-price"><span class="amount">$169.00</span></td>
                                    <td class="pro-stock-stauts"><span class="in-stock">in stock</span></td>
                                    <td class="pro-add-to-cart"><a href="#" class="add-to-cart">add to cart</a></td>
                                </tr>
                                <tr>
                                    <td class="pro-remove"><a href="#">×</a></td>
                                    <td class="pro-thumbnail"><a href="#"><img src="assets/img/product/pro_sm_1.png" alt="" /></a></td>
                                    <td class="pro-title"><a href="#">DSR Eiffel chair</a></td>
                                    <td class="pro-price"><span class="amount">$137.00</span></td>
                                    <td class="pro-stock-stauts"><span class="out-stock">out stock</span></td>
                                    <td class="pro-add-to-cart"><a href="#" class="add-to-cart">add to cart</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- PAGE SECTION END -->
@endsection

