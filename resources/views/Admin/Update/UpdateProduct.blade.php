@extends('admin.layout')
@section('content')
    <div class="col-12">
        <div class="card recent-sales overflow-auto p-3">
            <form action="/insert/product" method="post" class="email-signup" enctype="multipart/form-data">
                @csrf

                <input class="form-control my-3" type="text" placeholder="Product name" aria-label="default input example"
                    id="name" name="name" placeholder="input name" value="{{ old('name') }}">

                <input class="form-control my-3" type="text" placeholder="Species" aria-label="default input example"
                    name="Species" value="{{ old('Species') }}">

                <input class="form-control my-3" type="text" placeholder="Price" aria-label="default input example"
                    name="price" id="" placeholder="input price" value="{{ old('price') }}">

                <input class="form-control my-3" type="text" placeholder="Quatity" aria-label="default input example"
                    name="price" id="" placeholder="input price" value="{{ old('Quantity') }}">

                <input class="form-control my-3" type="text" placeholder="Discount" aria-label="default input example"
                    name="Discount" placeholder="discount" value="{{ old('Discount') }}">

                <input class="form-control my-3" type="text" placeholder="Description" aria-label="default input example"
                    name="description" class="form-control " id="" placeholder="Description"
                    value="{{ old('description') }}">
                <div class="u-form-group">

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label"> Product Avatar</label>
                        <input class="form-control" type="file" id="formFileMultiple" name="image" multiple>
                    </div>
                    <button>{{ __('UPDATE') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
