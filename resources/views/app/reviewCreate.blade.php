
@extends('layouts.app.appLayout')
@section('content')
    <div class="container" style="margin-left: 600px; margin-top: 50px">
<div class="riview-field mt-40">
    <div class="review_comment_box_inner">
        <form action="{{route('review.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Rating</label>
                <select class="form-control" name="rating" id="exampleFormControlSelect1">
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
            </div>
            <input type="hidden" value="{{$orderItem->product->id}}" name="product_id">
            <input type="hidden" value="{{$orderItem->id}}" name="orderItemId">
            <div class="form-group">
                <label class="req" for="comments">Your Review</label>
                <textarea name="review" rows="5" id="comments" required="required"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="customer-btn">Submit</button>
            </div>
        </form>
    </div>
</div>
    </div>
@endsection
