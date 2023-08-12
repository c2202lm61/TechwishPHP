@extends('layouts.app')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 700px">
                <img src="img/carousel1.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Indoor</h5>
                    <p>Make your home freasher</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 700px">
                <img src="img/carousel2.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Outdoor</h5>
                    <p>Everyhouse need some green outside </p>
                </div>
            </div>
            <div class="carousel-item " style="height: 700px">
                <img src="img/carousel3.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Garden Tool</h5>
                    <p>Pefect for starting your own garden</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
            <span class="visually-hidden ">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid  pt-3 bg-fluid mx-auto">
        <div
            class="container d-flex flex-wrap row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ps-5 me-5 justify-content-center align-item-center">

            @foreach ($products as $product)
                <div class="col-sm-12 col-md-4 col-lg-4 mb-4 me-0">
                    <div class="card border-card position-relative">
                        <div class="position-absolute whishlist z-3">
                            <button class="button-62" value="{{ $product->Product_ID }}" onclick="tym(this)"><i class="fa-solid fa-heart"
                                        style="color: #ffffff;"></i></button>
                        </div>
                        <div class="imgBx">
                            <a href="/product/{{ $product->Product_ID }}"><img
                                    src="{{ asset('storage/' . $product->image->ImageLink) }}"
                                    class="object-fit-fill border rounded w-100 h-100" alt="..."></a>
                        </div>
                        <div class="contentBx">
                            <h2 class="card-text">{{ $product->Name }}</h2>
                            <div class="size price card-text text-success">
                                {{ $product->Price }}$
                            </div>
                            <div class="color text-dark">
                                {{ $product->Description }}
                            </div>
                            <a href="/add/{{ $product->Product_ID }}/1" class="mt-2 btn btn-success"
                                role="button">Buy Now</a>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js">

    </script>
    <script type="text/javascript">
        function  tym(obj){
            $.ajax({
                url: "http://127.0.0.1:8000/wishlist/update/"+obj.value,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                    } else {
                        alert("An error occurred.");
                    }
                },
                error: function(xhr, status, error) {
                    alert('call api error');
                }
            });
        }

    </script>
@endsection
