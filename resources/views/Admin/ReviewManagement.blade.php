@extends('Admin.Layout')
@section('content')
    <div class="card-body pb-0">
        <h5 class="card-title">Reviews List</h5>

        <table class="table table-striped" style="border-radius: 10px">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Comment</th>
                    <th scope="col">UserID</th>
                    <th scope="col">ProductID</th>
                    <th scope="col text-center">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                <tr>
                    <th scope="row">{{ $review->ReviewID }}</th>
                    <td>{{ $review->Rating }}</td>
                    <td>{{ $review->Comment }}</td>
                    <td>{{  $review->UserID }}</td>
                    <td>{{  $review->Product_ID }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" style="">
                            <li>
                                <form action="/admin/delete/review" method="post" class="mb-0">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" class="d-inline" name="id" value="{{ $review->Product_ID }}">
                                    <input type="submit" class="btn btn-link text-decoration-none small text-danger" value="Delete">
                                </form>
                            </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>


        </table>

    </div>
@endsection
