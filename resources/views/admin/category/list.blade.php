@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th>Category Slug</th>
                                <th>Category Descriptions</th>
                                <th>Category Sub ID</th>
                                <th>Category Parent ID</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $key => $category)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $category->catName }}</td>
                                    <td>{{ $category->catSlug }}</td>
                                    <td>{{ $category->catDescriptions }}</td>
                                    <td>{{ $category->catSubID }}</td>
                                    <td>{{ $category->catParentID }}</td>
                                    <td>
                                        <a href="{{ route('category-edit', $category->id) }}" class="btn btn-primary">Edit</a>

                                        <!-- Delete Form -->
                                        <a href="#" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal{{ $category->id }}">Delete</a>
                                        <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="deleteModalLabel{{ $category->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $category->id }}">
                                                            Confirm Deletion</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete this category?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <form action="{{ route('category-delete', $category->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->

                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                                        <script>
                                            $(document).ready(function() {});
                                        </script>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
