@extends('Admin.Layout')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <form class="email-signup" action="/admin/insert/order" method="POST">
            @csrf
            <div class="u-form-group">
                <input type="name" for="name" type="text" name="name" value="" required
                    autofocus autocomplete="name" placeholder="Order Name" name="name" class="name-input" />
                <span class="text-danger">
                    {{--  @error('name')
                        {{ $message }}
                    @enderror  --}}
                </span>
            </div>
            <div class="u-form-group">
                <input type="name" for="name" type="text" name="name" value="" required
                    autofocus autocomplete="name" placeholder="Order Name" name="name" class="name-input" />
                <span class="text-danger">
                    {{--  @error('name')
                        {{ $message }}
                    @enderror  --}}
                </span>
            </div>
            <div class="u-form-group text-center">
                <select class="form-select name-input m-auto" aria-label="Default select example">

                    @foreach ($deliveries as $delivery)
                    <option value="{{ $delivery->DeliveryID }}">{{ $delivery->Name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="u-form-group text-center">
                <select class="form-select name-input m-auto" aria-label="Default select example">
                    @foreach ($users as $user)
                    <option value="{{ $user->UserID }}">{{ $user->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-check">
                @foreach ($payments as $payment)
                <input class="" type="radio" name="payment" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  {{ $payment->PaymentName }}
                </label>
                @endforeach
            </div>
            <div class="u-form-group">
                <button>{{ __('ADD') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
