@extends('Admin.Layout')
@section('content')
    <div class="card-body pb-0">
        <h5 class="card-title">Orders List</h5>

        <table class="table table-borderless" style="border-radius: 10px">
            <thead>
                <tr>
                    <th scope="col">Order id</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Username</th>
                    <th scope="col">UserPhone</th>
                    <th scope="col">Delivery</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col text-center">Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Cay Ot Chuong</td>
                    <td>$64</td>
                    <td class="fw-bold">124</td>
                    <td>31/01/2003</td>
                    <td>Duongngohehe</td>
                    <td>0868284726</td>
                    <td>Teleport</td>
                    <td>Banking</td>
                    <td>64$</td>
                    <td class="">pending</td>
                    <td class="d-flex flex-wrap justify-content-center">
                        <span><button class="btn btn-success mx-1">Verify</button></span>
                        <span><button class="btn btn-warning mx-1">Denied</button></span>
                        <button class="btn btn-danger mx-1 my-1">Delete</button>
                    </td>
                </tr>

        </table>

    </div>
@endsection
