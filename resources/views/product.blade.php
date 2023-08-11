@extends('layouts.app')

@section('content')
    <div class="container-fluid  bg-fluid mx-auto ">
        <div class="d-flex  px-0 mx-0 res-phone justify-content-center">
            <div class="col-md-3 col-sm-6 my-4 resp-1 d-flex flex-col justify-content-between">
                <div class="fixed-filter border-filter border-top-none p-4 bg-filter scroll-filter">
                    <form id="filterForm " action="/product" method="post">
                        <!-- ... (các checkbox và nút Apply) ... -->
                        @csrf




                        {{-- -------------------------------------------form---------------------- --}}
                        @foreach ($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="product_type[]"
                                    value="{{ $category->CategoryID }}" id="fertilizerCheck">
                                <label class="form-check-label" for="fertilizerCheck">
                                    {{ $category->CategoryName }}
                                </label>
                            </div>
                        @endforeach





                        <hr class="divider w-100">





                        <button id="applyFilter" class="btn bg-darkgreen text-whitecoffee mt-3">Apply</button>
                    </form>

                </div>



            </div>



            {{-- ------------------------------------------------------------------------------Danh sasch san
            pham------------------------------------------- --}}




            <div class="col-md-9 col-sm-12 my-4 justify-content-center resp-2">
                <div
                    class="container d-flex flex-wrap row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center mx-0">


                    @foreach ($products as $product)
                        <div class="col-sm-12 col-md-4 col-lg-4 mb-4 me-0">
                            <div class="card border-card position-relative">
                                <div class="position-absolute whishlist z-3">
                                    <a href=""><button class="button-62"><i class="fa-solid fa-heart"
                                                style="color: #ffffff;"></i></button></a>
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
                                    <a href="#" class="mt-2 btn btn-success" role="btn">Buy Now</a>

                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>

    </div>



    <!-- ... (phần mã JavaScript còn lại) ... -->

    <script>
        // ... (các tác vụ JavaScript khác)

        const resetFilterButton = document.getElementById('resetFilter');

        resetFilterButton.addEventListener('click', function() {
            const filterCollapse = new bootstrap.Collapse(filterAccordion);
            filterCollapse.show();
            resetFilter();
        });
    </script>
@endsection
