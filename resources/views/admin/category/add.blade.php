@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="container mt-3" style="margin-top: 20px">
                <h2>Add New Category</h2>
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ route('category-save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="form-group">
                        <label for="catID">Category ID</label>
                        <input type="text" class="form-control" id="catID" name="catID" required>
                    </div> --}}
                    <div class="form-group">
                        <label for="catName">Category Name</label>
                        <input type="text" class="form-control" id="catName" name="catName" required>
                    </div>
                    <div class="form-group">
                        <label for="catSlug">Category Slug</label>
                        <input type="text" class="form-control" id="catSlug" name="catSlug" required>
                    </div>
                    <div class="form-group">
                        <label for="catImage">Category Image</label>
                        <input type="file" class="form-control-file" id="catImage" name="catImage" accept="image/*"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="catDescriptions">Category Descriptions</label>
                        <input type="text" class="form-control" id="catDescriptions" name="catDescriptions" required>
                    </div>
                    <div class="form-group">
                        <label for="catSubID">Category Sub ID</label>
                        <input type="text" class="form-control" id="catSubID" name="catSubID" required>
                    </div>
                    <div class="form-group">
                        <label for="catParentID">Category Parent ID</label>
                        <input type="text" class="form-control" id="catParentID" name="catParentID" required>
                    </div>
                    <!-- Add other fields here as needed -->
                    <button type="submit" class="btn btn-primary">Add Category</button>
                    <a href="{{ route('category-list') }}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
