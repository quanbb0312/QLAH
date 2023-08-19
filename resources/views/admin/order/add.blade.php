@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="container mt-3" style="margin-top: 20px">
                <h2>Add New Order</h2>
                <!-- Add success message display logic here -->
                <form action="{{ route('order-save') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="customer_id">Customer</label>
                        <select name="customer_id" id="customer" class="form-control  @error('customer_id') is-invalid @enderror">
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                        @error('customer_id')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror<br>
                    </div>

                    <div class="form-group">
                        <label for="product">Product:</label>
                        <select name="product_id" id="product" class="form-control  @error('product_id') is-invalid @enderror">
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->productName }}</option>
                            @endforeach
                        </select>
                        @error('product_id')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror<br>
                    </div>

                    <div class="form-group">
                        <label for="id">Quantity</label>
                        <input type="number" class="form-control  @error('quantity') is-invalid @enderror" id="quantity" name="quantity" required>
                        @error('quantity')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror<br>
                    </div>
                   
                    <div class="form-group">
                        <label for="date_at">Order Date</label>
                        <input type="date" class="form-control @error('date_at') is-invalid @enderror" id="date_at" name="date_at" required>
                        @error('date_at')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror<br>
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <input type="text" class="form-control @error('note') is-invalid @enderror" id="note" name="note" required>
                        @error('note')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror<br>
                    </div>
                    <!-- Add other fields here as needed -->
                    <button type="submit" class="btn btn-primary">Add Order</button>
                    <a href="{{ route('order-list') }}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
