@extends('Admin.Layout')
@section('content')
    <div class="card-body pb-0">
        <h5 class="card-title">Orders List</h5>

        <table class="table table-borderless" style="border-radius: 10px">
            <thead>
                <tr>
                    <th scope="col">Order id</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">UserName</th>
                    <th scope="col">UserPhone</th>
                    <th scope="col">Delivery</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col text-center">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->OrderID }}</th>
                    <td>${{ $order->Quantity }}</td>
                    <td>{{ $order->OrderDate }}</td>
                    <td class="fw-bold">{{ $order->total }}</td>
                    <td>tui</td>
                    <td>0123456789</td>
                    <td>{{ $order->DeliveryID }}</td>
                    <td>{{ $order->PaymentID }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->StatusBill }}</td>
                    <td class="d-flex flex-wrap justify-content-center">
                        <span><button class="btn btn-success mx-1">Verify</button></span>
                        <span><button class="btn btn-warning mx-1">Denied</button></span>
                        <button class="btn btn-danger mx-1 my-1">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>


        </table>

    </div>
@endsection
