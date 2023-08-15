@extends('admin.master')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="container mt-3" style="margin-top:20px">
                    <h2>Add new product</h2>
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('product-save') }}" method="POST">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="name">Product Name:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter product name" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price">Product Price:</label>
                            <input type="number" class="form-control" id="price" name="price"
                                placeholder="Enter product price" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="image">Product Image:</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="details">Details:</label>
                            <textarea class="form-control" rows="5" id="details" name="details"></textarea>
                        </div>
                        <div class="mb-3 mt-6">
                            <label for="category">Category:</label>
                            <select name="category" id="category" class="form-control">
                                @foreach ($cat as $c)
                                    <option value="{{ $c->catID }}">{{ $c->catName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('admin/product-list') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                    bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                        templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
