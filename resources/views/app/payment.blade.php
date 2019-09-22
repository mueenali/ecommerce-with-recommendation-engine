
<link rel="stylesheet" href="/assets/css/stripe.css">
<script src="https://js.stripe.com/v3/"></script>

<div class="row" id="body">
    <form id="form-checkout" method="post" action="{{route('charge.store')}}">
        @csrf()
        <label class="lable">
            <span>Name</span>
            <input name="cardholderName" class="field" placeholder="Card Holder" />
        </label>
        <label class="lable">
            <span>Card</span>
            <div id="card-element" class="field"></div>
        </label>
        <button id="checkout-button" type="submit">Pay</button>
        <div class="col-sm-6 col-md-4">
            <div id="danger" class="alert-danger">
            </div>
        </div>
        <div class="outcome">
            <div class="error">
            </div>
        </div>
    </form>
</div>
<script src="/assets/js/stripe.js"></script>
