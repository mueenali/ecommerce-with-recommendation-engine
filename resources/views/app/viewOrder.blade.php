@extends('layouts.app.appLayout')
@section('content')
    <!-- Start Maincontent  -->
    <section class="main_content_area my_account ptb-100">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <h3>Order Items</h3>
                                <div class="lion_table_area table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>
                                            <th>Review</th>
                                            <th>Dashboard</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($order)
                                            @foreach($order->orderItems as $item)
                                                <tr>
                                                    <td>{{$item->product->name}}</td>
                                                    <td>{{$item->quantity}}</td>
                                                    <td>{{$item->total_price}}</td>
                                                    @if($item->reviewed == 0)
                                                        <td><a href="{{route('review.create', $item->id)}}">Submit Review</a></td>
                                                    @else
                                                        <td>Submitted</td>
                                                    @endif
                                                    <td><a href="{{route('userDash.index')}}">Back to dashboard</a></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- End Maincontent  -->


@endsection



