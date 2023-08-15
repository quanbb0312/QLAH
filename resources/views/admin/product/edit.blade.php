@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h2>Update product</h2>
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('product-update', $pro->productID) }}" method="POST">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="id">Product ID:</label>
                                <input type="text" class="form-control" id="id" name="id"
                                    value="{{ $pro->productID }}" readonly>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="name">Product Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $pro->productName }}">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="price">Product Price:</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    value="{{ $pro->productPrice }}">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="image">Product Image:</label>
                                <input type="hidden" value="{{ $pro->productImage }}" id="old_image" name="old_image"><br>
                                <img src="../pro_img/{{ $pro->productImage }}" style="height: 100px; width: 100px;"><br>
                                <input type="file" class="form-control" id="new_image" name="new_image">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="details">Details:</label>
                                <textarea class="form-control" rows="5" id="details" name="details">
                        {{ $pro->productDetails }}
                        </textarea>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="category">Category:</label>
                                <select name="category" id="category" class="form-control">
                                    @foreach ($cat as $c)
                                        <option value="{{ $c->catID }}"
                                            {{ $c->catID == $pro->catID ? 'selected' : '' }}>
                                            {{ $c->catName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ url('admin/product-list') }}" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
