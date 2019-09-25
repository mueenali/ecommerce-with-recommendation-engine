@extends('layouts.app.appLayout')
@section('content')
    <!-- Start Maincontent  -->
    <section class="main_content_area my_account ptb-100">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                                <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li>
                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Orders</h3>
                                <div class="lion_table_area table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Total Items</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Details</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(current_user()->orders)
                                            @foreach(current_user()->orders as $order)
                                        <tr>
                                            <td>{{$order->items}}</td>
                                            <td>RM {{$order->total}}</td>
                                            <td><span class="success">{{$order->status}}</span></td>
                                            <td>{{$order->created_at->format('d/m/Y')}}</td>
                                            <td><a href="{{route('order.show', $order->id)}}">View Order</a></td>
                                        </tr>
                                        @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a href="{{route('address.create')}}">Add New Address</a>
                                <div class="container">
                                    <div class="row">
                                        @foreach(current_user()->addresses as $address)
                                        <div class="col-sm-4">
                                            <div class="card" style="width: 18rem;">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$address->country}}</h5>
                                                    <h6 class="card-subtitle mb-2 text-muted">{{$address->city}}</h6>
                                                    <h6 class="card-subtitle mb-2 text-muted">{{$address->state}}</h6>
                                                    <p class="card-text">{{$address->street_address}}</p>
                                                    <h6 class="card-subtitle mb-2 text-muted">{{$address->postcode}}</h6>
                                                    @if($address->default == true)
                                                        <h6 class="card-subtitle mb-2 text-muted">Default</h6>
                                                    @else
                                                        <h6 class="card-subtitle mb-2 text-muted">Not default</h6>
                                                    @endif
                                                    <a href="{{route('address.default', $address->id)}}" class="card-link">Make default</a>
                                                    <a href="{{route('address.edit', $address->id)}}" class="card-link">Edit</a>
                                                    <a href="{{route('address.destroy', $address->id)}}" class="card-link">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="#">
                                                <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                    <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                </div> <br>
                                                <label>First Name</label>
                                                <input type="text" name="first-name">
                                                <label>Last Name</label>
                                                <input type="text" name="last-name">
                                                <label>Email</label>
                                                <input type="text" name="email-name">
                                                <label>Password</label>
                                                <input type="password" name="user-password">
                                                <label>Birthdate</label>
                                                <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                <span class="example">
                                                              (E.g.: 05/31/1970)
                                                            </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                                <input id="c_check" type="checkbox" value="1" name="optin">
                                                                <label for="c_check">Receive offers from our partners</label>
                                                            </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                                <input id="c_sign" type="checkbox" value="1" name="newsletter">
                                                                <label for="c_sign">Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                            </span>
                                                <div class="save_button primary_btn default_button">
                                                    <a href="#">Save</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Maincontent  -->


@endsection



