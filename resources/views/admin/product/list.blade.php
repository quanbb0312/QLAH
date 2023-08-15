@extends('admin.master')
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Product List</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pro as $p)
                                    <tr>
                                        <td>{{ $p->productID }}</td>
                                        <td>{{ $p->productName }}</td>
                                        <td>{{ $p->productPrice }}</td>
                                        <td><img src="{{ asset('storage/admin_photos/' . $p->productImage) }}"
                                                style="height: 100px; width: 100px;">
                                        </td>
                                        <td>{{ $p->productDetails }}</td>
                                        <td>{{ $p->catID }}</td>
                                        <td>

                                            <a href="{{ route('product-edit', $p->productID) }}"
                                                class="btn btn-primary">Edit</a>
                                            <button class='btn' type="submit">Delete</button>
                                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deleteModal">Delete</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $p->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="deleteModalLabel{{ $p->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $p->id }}">
                                                                Confirm Deletion</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this product?
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancel</button>
                                                            <form action="{{ url('product-delete/', ['id' => $p->id]) }}"
                                                                method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    </div>
@endsection
