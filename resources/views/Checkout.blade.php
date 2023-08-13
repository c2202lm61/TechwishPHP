@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container p-4 my-4">
            <form action="/checkin" enctype="multipart/form-data" method="post">
                @csrf

                <div class="shopping-cart py-5">

                    <div class="column-labels">
                        <label class="product-image text-center">Image</label>
                        <label class="product-details text-center">Product</label>
                        <label class="product-price text-center">Price</label>

                        <label class="product-quantity text-center">Quantity</label>
                        <label class="product-removal text-center">Remove</label>
                        <label class="product-line-price text-center">Total</label>
                    </div>

                    @foreach ($carts as $cart)
                    <div class="product">
                        <div class="product-image text-center p-3">
                            <img src="https://webdevtrick.com/wp-content/uploads/predator.jpg" class=" img-thumbnail">
                        </div>
                        <div class="product-details">
                            <div class="product-title card-text text-success bold text-center ">{{ $cart['name'] }}</div>
                            <p class="product-description text-center ">{{ $cart['description'] }}</p>
                        </div>
                        <div class="product-price price card-text text-center p-3 text-success">{{ $cart['price'] }}</div>

                        <div class="product-quantity text-center py-4">
                            <input type="number" value="{{ $cart['quantity'] }}" min="1">
                        </div>
                        <div class="product-removal text-center p-3">
                            <button class="remove-product button-62">
                                Remove
                            </button>
                        </div>
                        <div class="product-line-price price card-text text-center p-3 text-success ">{{ $cart['price']*$cart['quantity'] }}</div>
                    </div>
                    @endforeach
                    {{-- --------------------------------------------------------------------------------------------------------------------- --}}

                    {{-- --------------------------------------------------------------------------------------------------------------------- --}}
                    <div class="totals">
                        <div class="totals-item">
                            <label>Subtotal</label>
                            <div class="totals-value  text-success card-text" id="cart-subtotal">{{ $total }}</div>
                        </div>
                        <div class="totals-item">
                            <label>Tax (5%)</label>
                            <div class="totals-value  text-success card-text" id="cart-tax">{{ $tax }}</div>
                        </div>
                        <div class="totals-item">
                            <label>Shipping</label>
                            <div class="totals-value  text-success card-text" id="cart-shipping">{{ $ship }}</div>
                        </div>
                        <div class="totals-item totals-item-total">
                            <label>Grand Total</label>
                            <div class="totals-value  text-success card-text" id="cart-total ">{{ $grandTotal }}</div>
                        </div>
                    </div>



                </div>
                <div class="col-12">
                        @csrf
                        <label for="">Delivery:</label>
                        <select class="form-select w-25 my-3 form-control" id="inputGroupSelect01" name="delevery">

                            @foreach($deliveries as $delivery)

                                  <option value="{{ $delivery->DeliveryID }}">{{$delivery->Name}}</option>
                            @endforeach

                        </select>

                        <label for="Payment:">Payment:</label>
                        <select class="form-select w-25" id="inputGroupSelect01" name="payment">

                            @foreach($payments as $payment)
                            <option value="{{$payment->PaymentID}}">{{$payment->PaymentName}}</option>
                            @endforeach
                        </select>
                        <input type="hidden" name="grandtotal" value="{{ $grandTotal }}">
                        <!-- <button type="submit" class="checkout button-63 mb-3">Checkout</button>-->
                        <input type="submit" class="checkout button-63 mb-3">
                        <br>
                        </form>
                </div>



                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src="function.js"></script>

            <br>
        </div>
    </div>
    <br>
@endsection
