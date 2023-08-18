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
                                    <th>Quantity</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->productName }}</td>
                                        <td>{{ $product->productPrice }}</td>
                                        <td>{{ $product->productQuantity }}</td>
                                        <td><img src="{{ asset('storage/products/' . $product->productImage) }}"
                                                style="height: 100px; width: 100px;">
                                        </td>
                                        <td>{{ $product->productDetails }}</td>
                                        <td>{{ $product->category->catName }}</td>
                                        <td>

                                            <a href="{{ route('product-edit', $product->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deleteModal{{ $product->id }}">Delete</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="deleteModalLabel{{ $product->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $product->id }}">
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
                                                            <form action="{{ route('product-delete', $product->id) }}"
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
                        <div style="float: right; margin:20px">
                            {{ $products->appends(request()->all())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
