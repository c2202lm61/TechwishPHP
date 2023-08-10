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
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <form class="email-signup" action="{{ route('register') }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="u-form-group">
                        <input type="name" for="name" type="text" name="name" :value="old('name')" required
                            autofocus autocomplete="name" placeholder="User Name" name="name" class="name-input" />
                        <span class="text-danger">
                            {{--  @error('name')
                                {{ $message }}
                            @enderror  --}}
                        </span>
                    </div>

                    <div class="u-form-group">
                        <input for="phone" type="text" name="phone" :value="old('phone')" required autofocus
                            autocomplete="phone" placeholder="Phone" name="phone" class="name-input" />
                        <span class="text-danger">
                            {{--  @error('phone')
                                {{ $message }}
                            @enderror  --}}
                        </span>
                    </div>

                    <div class="u-form-group">
                        <input type="email" :value="old('email')" required autocomplete="username" for="email"
                            id="email" name="email" placeholder="Email" />
                        <span class="text-danger">
                            {{--  @error('email')
                                {{ $message }}
                            @enderror  --}}
                        </span>
                    </div>

                    <div class="u-form-group">
                        <input type="password" name="password" placeholder="Password" type="password" name="password"
                            id="password" required autocomplete="new-password" />
                        <span class="text-danger">
                            {{--  @error('password')
                                {{ $message }}
                            @enderror  --}}
                        </span>
                    </div>

                    <div class="u-form-group">
                        <input for="password_confirmation" :value="__('Confirm Password')" type="password"
                            placeholder="Confirm Password" id="password_confirmation" class="block mt-1 w-full"
                            type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="u-form-group">
                        <button>{{ __('ADD') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
