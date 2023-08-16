@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2>Update Category</h2>
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('category-update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 mt-3">
                                <label for="name">Category Name:</label>
                                <input type="text" class="form-control" id="name" name="catName"
                                    value="{{ $category->catName }}">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="slug">Category Slug:</label>
                                <input type="text" class="form-control" id="slug" name="catSlug"
                                    value="{{ $category->catSlug }}">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="descriptions">Category Descriptions:</label>
                                <textarea class="form-control" rows="5" id="descriptions" name="catDescriptions">{{ $category->catDescriptions }}</textarea>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="sub_id">Category Sub ID:</label>
                                <input type="number" class="form-control" id="sub_id" name="catSubID"
                                    value="{{ $category->catSubID }}">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="parent_id">Category Parent ID:</label>
                                <input type="number" class="form-control" id="parent_id" name="catParentID"
                                    value="{{ $category->catParentID }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('category-list') }}" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
