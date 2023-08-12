@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="bg-whitelight br-6px my-4">
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
                        @foreach ($wishlists as $wishlist)
                            <tr>
                                <td scope="col" class="text-center card-text">{{ $wishlist->Name }}</td>
                                <td scope="col" class="text-center "><img
                                        src="{{ asset('storage/' . $wishlist->image->ImageLink) }}" alt=""
                                        height="60px" width="60px"></td>
                                <td scope="col" class="text-center lobster-font">{{ $wishlist->Desciption }}</td>
                                <td scope="col" class="text-center price text-success">{{ $wishlist->Price }}$</td>
                                <td scope="col" class="text-center"><span class="mx-1">
                                        <a href="whislist/delete/{{ $wishlist->WishlistID }}"
                                            class="button-62">Delete</a></span>
                                    <span class="mx-1"><a href="/add-to-cart/{{ $wishlist->Product_ID }}"
                                            class="button-63">Add to cart</a></span>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
