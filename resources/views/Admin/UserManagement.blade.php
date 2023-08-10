@extends('Admin.Layout')
@section('content')
    <section class="dashboard section">
        <div class="col-12">
            <div class="card recent-sales overflow-auto">



                <div class="card-body">
                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row"><a href="#">{{ $user->UserID }}</a></th>
                                <td>{{ $user->name }}</td>
                                <td><a href="#" class="text-primary">{{ $user->phone }}</a>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td><span class="badge bg-success">{{ $user->password }}</span></td>
                                <td>
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                      Action
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                      <li><a class="dropdown-item text-success" href="#">Edit</a></li>
                                      <li>
                                        <form action="/admin/delete/user" method="post" class="mb-0">
                                            <input type="hidden" class="d-inline" name="id" value="{{ $user->UserID }}">
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

            </div>
        </div><!-- End Recent Sales -->

    </section>
@endsection
