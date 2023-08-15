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
                        <label for="id">Order ID</label>
                        <input type="text" class="form-control" id="id" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="customer_id">Customer ID</label>
                        <input type="text" class="form-control" id="customer_id" name="customer_id" required>
                    </div>
                    <div class="form-group">
                        <label for="order_date">Order Date</label>
                        <input type="date" class="form-control" id="order_date" name="order_date" required>
                    </div>
                    <div class="form-group">
                        <label for="total_amount">Total Amount</label>
                        <input type="text" class="form-control" id="total_amount" name="total_amount" required>
                    </div>
                    <!-- Add other fields here as needed -->
                    <button type="submit" class="btn btn-primary">Add Order</button>
                    <a href="{{ url('admin/order-list') }}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
