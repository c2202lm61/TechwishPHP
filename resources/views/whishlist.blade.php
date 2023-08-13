@extends('layouts.app')
@section('content')
    <div class="container-fluid " style="background-image: url('img/5.jpg');">
        <div class="container py-4">
            <div class="bg-whitelight br-6px ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center lobster-font">Product Name</th>
                            <th scope="col " class="text-center lobster-font">Image</th>
                            <th scope="col" class="text-center lobster-font">description</th>
                            <th scope="col" class="text-center lobster-font">Price</th>
                            <th scope="col" class="text-center lobster-font"> Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td scope="col" class="text-center card-text">{{ $product->Name }}</td>
                            <td scope="col" class="text-center "><img src="{{ asset('storage/' . $product->image->ImageLink) }}" alt="" height="60px"
                                    width="60px"></td>
                            <td scope="col" class="text-center lobster-font">{{ $product->Description }}</td>
                            <td scope="col" class="text-center price text-success">${{ $product->Price }}</td>
                            <td scope="col" class="text-center"><span class="mx-1"><a href="/wishlist/delete/{{ $product->Product_ID }}"
                                        class="button-62">Delete</a></span>
                                <span class="mx-1"><a href="/add/{{ $product->Product_ID }}/1" class="button-63">Add to cart</a></span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
