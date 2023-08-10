@extends('layouts.app')

@section('content')
    <div class="container-fluid res-phone d-flex bg-fluid">
        <div class="col-md-3 col-sm-6 my-4 mx-3 resp-1 border-filter border-top-none p-4 bg-filter">
            <form id="filterForm ">
                <!-- ... (các checkbox và nút Apply) ... -->


                <div class="form-check">

                    {{-- -------------------------------------------form---------------------- --}}
                    <input class="form-check-input" type="checkbox" name="product_type[]" value="fertilizer"
                        id="fertilizerCheck">
                    <label class="form-check-label" for="fertilizerCheck">
                        Fertilizer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="product_type[]" value="tool" id="toolCheck">
                    <label class="form-check-label" for="toolCheck">
                        Tool
                    </label>
                </div>


                <hr class="divider w-100">


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="product_type[]" value="fertilizer"
                        id="fertilizerCheck">
                    <label class="form-check-label" for="fertilizerCheck">
                        Green only
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="product_type[]" value="tool" id="toolCheck">
                    <label class="form-check-label" for="toolCheck">
                        Flower
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="product_type[]" value="tool" id="toolCheck">
                    <label class="form-check-label" for="toolCheck">
                        Cactus
                    </label>
                </div>


                <hr class="divider w-100">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="product_type[]" value="fertilizer"
                        id="fertilizerCheck">
                    <label class="form-check-label" for="fertilizerCheck">
                        Indoor Plant
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="product_type[]" value="tool" id="toolCheck">
                    <label class="form-check-label" for="toolCheck">
                        Outdoor Plant
                    </label>
                </div>

                <hr class="divider w-100">


                <button id="applyFilter" class="btn bg-darkgreen text-whitecoffee mt-3">Apply</button>
            </form>
            <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>


        </div>



        {{-- ------------------------------------------------------------------------------Danh sasch san
        pham------------------------------------------- --}}




        <div class="col-md-9 col-sm-12 my-4 justify-content-center ">
            <div class="container d-flex flex-wrap row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">

                <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                    <div class="card border-card">
                        <div class="imgBx">
                            <img src="img\4.jpg" class="object-fit-fill border rounded w-100 h-100" alt="...">
                        </div>
                        <div class="contentBx">
                            <h2>Cactus</h2>
                            <div class="size">
                                10$
                            </div>
                            <div class="color">
                                Very cute and extremely gud for office deco
                            </div>
                            <a href="#" class="mt-2 btn btn-success" role="btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- Add more products here... -->
                <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                    <div class="card border-card">
                        <div class="imgBx">
                            <img src="img\2.jpg" class="object-fit-contain w-100 h-100">
                        </div>
                        <div class="contentBx">
                            <h2>Nike Shoes</h2>
                            <div class="size">
                                <h3>Size :</h3>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <div class="color">
                                <h3>Color :</h3>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a href="#" class="mt-2">Buy Now</a>
                        </div>
                    </div>
                </div>

                <!-- Add more products here... -->
                <div class="col-sm-6 col-md-4 col-lg-4 mb-4 ">
                    <div class="card border-card">
                        <div class="imgBx ">
                            <img src="img\câytest.jpg" class="object-fit-contain w-100 h-100">
                        </div>
                        <div class="contentBx">
                            <h2>Nike Shoes</h2>
                            <div class="size">
                                <h3>Size :</h3>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <div class="color">
                                <h3>Color :</h3>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a href="#" class="mt-2">Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- Add more products here... -->
                <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                    <div class="card">
                        <div class="imgBx">
                            <img src="img\1.jpg" class="object-fit-contain w-100 h-100">
                        </div>
                        <div class="contentBx">
                            <h2>Nike Shoes</h2>
                            <div class="size">
                                <h3>Size :</h3>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                            </div>
                            <div class="color">
                                <h3>Color :</h3>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a href="#" class="mt-2">Buy Now</a>
                        </div>
                    </div>
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
