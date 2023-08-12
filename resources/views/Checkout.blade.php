@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container p-4">
            <form action="" enctype="multipart/form-data" method="">


                <div class="shopping-cart py-5">

                    <div class="column-labels">
                        <label class="product-image text-center">Image</label>
                        <label class="product-details text-center">Product</label>
                        <label class="product-price text-center">Price</label>
                        <label class="product-quantity text-center">Quantity</label>
                        <label class="product-removal text-center">Remove</label>
                        <label class="product-line-price text-center">Total</label>
                    </div>

                    <div class="product">
                        <div class="product-image text-center p-3">
                            <img src="https://webdevtrick.com/wp-content/uploads/predator.jpg" class=" img-thumbnail">
                        </div>
                        <div class="product-details p-3">
                            <span class="card-text text-center  ">Payment: <span class="text-success">Teleport</span></span>
                        </div>
                        <div class="product-price price card-text text-center p-3 text-success">1262.00</div>
                        <div class="product-quantity text-center px-3 py-4">
                            <input type="number" value="2" min="1">
                        </div>
                        <div class="product-removal text-center p-3">
                            <button class="remove-product button-62">
                                Remove
                            </button>
                        </div>
                        <div class="product-line-price price card-text text-center p-3 text-success ">2524.00</div>
                    </div>
                    {{-- --------------------------------------------------------------------------------------------------------------------- --}}

                    {{-- --------------------------------------------------------------------------------------------------------------------- --}}
                    <div class="totals">
                        <div class="totals-item">
                            <label>Subtotal</label>
                            <div class="totals-value  text-success card-text" id="cart-subtotal">3696.99</div>
                        </div>
                        <div class="totals-item">
                            <label>Tax (5%)</label>
                            <div class="totals-value  text-success card-text" id="cart-tax">3.60</div>
                        </div>
                        <div class="totals-item">
                            <label>Shipping</label>
                            <div class="totals-value  text-success card-text" id="cart-shipping">15.00</div>
                        </div>
                        <div class="totals-item totals-item-total">
                            <label>Grand Total</label>
                            <div class="totals-value  text-success card-text" id="cart-total ">4079.16</div>
                        </div>
                    </div>

                    <button class="checkout button-63">Checkout</button>

                </div>



                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src="function.js"></script>
            </form>
        </div>
    </div>
@endsection
