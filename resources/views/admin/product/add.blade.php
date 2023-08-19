@extends('admin.master')
@section('content')
    <!-- partial -->
        <div class="content-wrapper">
            <div class="row">
                <div class="container mt-3" style="margin-top:20px">
                    <h2>Add new product</h2>
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('product-save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="name">Product Name:</label>
                            <input type="text" class="form-control @error('productName') is-invalid @enderror" id="name" name="productName"
                                placeholder="Enter product name" required>
                            @error('productName')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror<br>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name">Product Slug:</label>
                            <input type="text" class="form-control @error('productSlug') is-invalid @enderror" id="name" name="productSlug"
                                placeholder="Enter product Slug" required>
                                @error('productSlug')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror<br>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price">Product Price:</label>
                            <input type="number" class="form-control @error('productPrice') is-invalid @enderror" id="price" name="productPrice"
                                placeholder="Enter product price" required>
                                @error('productPrice')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror<br>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price">Product Quantity:</label>
                            <input type="number" class="form-control @error('productQuantity') is-invalid @enderror" id="price" name="productQuantity"
                                placeholder="Enter product quantity" required>
                                @error('productQuantity')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror<br>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="image">Product Image:</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required>
                            @error('image')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror<br>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="details">Details:</label>
                            <textarea class="form-control @error('productDetails') is-invalid @enderror" rows="5" id="details" name="productDetails"></textarea>
                            @error('productDetails')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror<br>
                        </div>
                        <div class="mb-3 mt-6">
                            <label for="category">Category:</label>
                            <select name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror">
                                @foreach ($cat as $c)
                                    <option value="{{ $c->id }}">{{ $c->catName }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror<br>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('product-list') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
@endsection
