@extends('layouts.app')

@section('content')
    <div class="container-fluid res-phone d-flex ">
        <div class="col-md-3 col-sm-6 my-4 mx-3 resp-1">
            <div class="accordion text-whitecoffee border-filter" id="filterAccordion">
                <div class="accordion-item ">
                    <h2 class="accordion-header text-whitecoffee " id="heading_1">
                        <button class="accordion-button bg-brown text-whitecoffee" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_1" aria-expanded="true">

                            Product Type
                        </button>
                    </h2>
                    <div id="collapse_1" class="accordion-collapse  collapse show " aria-labelledby="heading_1"
                        data-bs-parent="#filterAccordion">
                        <div class="accordion-body">
                            <form id="filterForm">
                                <!-- ... (các checkbox và nút Apply) ... -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="product_type[]" value="fertilizer"
                                        id="fertilizerCheck">
                                    <label class="form-check-label" for="fertilizerCheck">
                                        Fertilizer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="product_type[]" value="tool"
                                        id="toolCheck">
                                    <label class="form-check-label" for="toolCheck">
                                        Tool
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="product_type[]" value="plant"
                                        id="plantCheck">
                                    <label class="form-check-label" for="plantCheck">
                                        Plant
                                    </label>
                                </div>
                                <button id="applyFilter" class="btn bg-darkgreen text-whitecoffee mt-3">Apply</button>
                            </form>
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        {{-- ------------------------------------------------------------------------------Danh sasch san
        pham------------------------------------------- --}}




        <div class="col-md-9 col-sm-12 my-4 justify-content-center ">
            <div class="container d-flex flex-wrap row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
                <!-- Product 1 -->
                <div class="col-sm-6 col-md-4 col-lg-4 ">
                    <div class="card resp-3" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                </div>

                <!-- Add more products here... -->





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
