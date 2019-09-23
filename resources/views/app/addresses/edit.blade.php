@extends('layouts.app.appLayout')
@section('content')

    <div class="container" style="margin-left: 600px; margin-top: 50px">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form action="{{route('address.update', $address->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="checkbox-form">
                        <h3>Billing Address</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Country <span class="required">*</span></label>
                                    <input type="text" name="country" placeholder="Country" value="{{$address->country}}" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" name="street_address" value="{{$address->street_address}}" placeholder="Street address" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" name="city" value="{{$address->city}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input type="text" name="state" placeholder="" value="{{$address->state}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" name="postcode" value="{{$address->postcode}}" />
                                </div>
                            </div>
                            <div class="form-group center" style="margin-left: 250px">
                                <button type="submit" class="btn btn-success">Update Address</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


