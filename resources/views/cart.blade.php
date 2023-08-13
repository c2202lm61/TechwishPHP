@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container p-4">
            <form action="/checkout" method="post">
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
                    <?php $grand_total = 0;
                    $total = 0; ?>
                    @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity']; ?>

                            <div class="product">
                                <div class="product-image text-center p-3">
                                    <img src="{{ asset('storage/' . $details['image']) }}" class=" img-thumbnail">
                                </div>
                                <div class="product-details">
                                    <div class="product-title card-text text-success bold text-center ">
                                        {{ $details['name'] }}</div>
                                    <p class="product-description card-text text-center ">
                                        {{ $details['description'] }}
                                    </p>
                                </div>
                                <div class="product-price price card-text text-center p-3 text-success">
                                    {{ $details['price'] }}</div>
                                <div class="product-quantity text-center px-3 py-4">
                                    <input type="number" name="quantity[{{ $id }}]"
                                        value="{{ $details['quantity'] }}" min="1">
                                </div>
                                <div class="product-removal text-center p-3">
                                    <a href="/remove/cart" class="remove-product button-62 remove-from-cart delete"
                                        data-id="{{ $id }}">
                                        Remove
                                    </a>
                                </div>
                                <div class="product-line-price price card-text text-center p-3 text-success ">
                                    {{ $total = $details['price'] * $details['quantity'] }}</div>
                                <?php $grand_total += $total; ?>
                            </div>
                        @endforeach
                    @endif

                    {{-- --------------------------------------------------------------------------------------------------------------------- --}}

                    {{-- --------------------------------------------------------------------------------------------------------------------- --}}
                    <!-- <div class="totals">
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
                                                                                                                                                                                                                                        </div> -->
                    <div class="totals-item totals-item-total">
                        <label>Grand Total</label>
                        <div class="totals-value  text-success card-text" id="cart-total ">{{ $grand_total }}</div>
                    </div>

                </div>

                <button class="checkout button-63">Checkout</button>
                <br>

        </div>



        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="function.js"></script>
        </form>

        <br>
    </div>
    <br>
    </div>

    <br>
@endsection

@section('scripts')
    <script type="text/javascript">
        // this function is for update card
        $(".update-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();

                    }
                });
            }
        });
        @section('scripts')
            <
            script type = "text/javascript" >
                // this function is for update card
                $(".update-cart").click(function(e) {
                    e.preventDefault();

                    var ele = $(this);

                    $.ajax({
                        url: '{{ url('update-cart') }}',
                        method: "patch",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.attr("data-id"),
                            quantity: ele.parents("tr").find(".quantity").val()
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                });

            $(".remove-from-cart").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                if (confirm("Are you sure")) {
                    $.ajax({
                        url: '{{ url('remove-from-cart') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.attr("data-id")
                        },
                        success: function(response) {
                            window.location.reload();

                        }
                    });
                }
            });
    </script>
@endsection
@endsection
